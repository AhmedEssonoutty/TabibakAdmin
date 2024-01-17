<?php

namespace App\Traits;

use DomDocument;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Facades\Image;
use Exception;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

trait FileUploadTrait
{
    /**
     * Upload file to default storage disk
     *
     * @access public
     *
     * @param UploadedFile $file
     * @param array $data
     * @return array|bool
     */
    public function upload(UploadedFile $file, array $data = []): array|bool
    {
        $type = $data['type'];
        $folder = $data['folder'] ?? null;
        $fileName = $data['file_name'] ?? null;
        $data["user_id"] = auth()->id();
        $data['fileable'] = $file->getSize();
        // Get extension
        $data['ext'] = $file->extension();
        // Get mime type
        $data['mime'] = $file->getMimeType();
        // Generate file name
        $fileName = $fileName ?
            $fileName.'_'.Carbon::now()->timestamp . Str::random(4) . '.' . $data['ext'] :
            Carbon::now()->timestamp . Str::random(4) . '-' . $file->getClientOriginalName();
        // Remove special characters
        $fileName = $this->filterFileName($fileName, true);
        $data['name'] = $fileName;
        // Get default folder
        if (empty($folder)) {
            [$folder] = explode('_', $type);
            $folder = config("filesystems.upload.paths.{$folder}", config('filesystems.upload.paths.default'));
        }
        // Create folder if not exists, or abort uploading
        if (!$this->createDirectoryIfNotExists($folder)) {
            return false;
        }
        // check if the file is image
        if (Str::contains($data['mime'], 'image')) {
            $image = $this->generateImage($file);
            // Get width & height
            $data['width'] = $image->width();
            $data['height'] = $image->height();
            $data['url'] = $folder . $fileName;
            // Save image to storage disk
            Storage::put($data['url'], $image->stream($data['ext'], config('filesystems.upload.quality')));
        } else {
            // Save file to storage disk and get file URL
            $data['url'] = Storage::putFileAs(rtrim($folder, "/"), $file, $fileName);
        }
        // Save new file object to DB
        return $data;
    }

    /**
     * Upload Many Files to default storage disk
     *
     * @access public
     *
     * @param array $files
     * @param string $type
     * @param string|null $folder
     * @param string|null $fileName
     * @param array $data
     * @return bool|array
     */

    public function uploadMany(array $files,
                           string $type,
                           string $folder = null,
                           string $fileName = null,
                           array $data = []): bool|array
    {
        $uploads = [];
        foreach ($files as $file) {
            $uploads = $this->upload($file, $type, $folder, $fileName, $data);
        }
        return $uploads;
    }

    /**
     * @throws Exception
     */
    public function deleteFiles(Collection $files): bool
    {
        foreach ($files as $file) {
            $this->remove($file);
        }
        return true;
    }

    /**
     * @throws Exception
     */
    public function deleteFile(Model $file): bool
    {
        $this->remove($file);
        return true;
    }

    /**
     * Check and create directory if not exists.
     *
     * @access protected
     *
     * @param string $folder
     *
     * @return bool|Exception
     */
    public function createDirectoryIfNotExists(string $folder): bool|Exception
    {
        // Check if dri exists
        if (Storage::exists($folder)) {
            return true;
        }
        // Create new dir
        try {
            Storage::makeDirectory($folder);
            return true;
        } catch (Exception $e) {
            return $e;
        }
    }

    public function generateImage($file): \Intervention\Image\Image
    {
        $maxWidth = config('filesystems.upload.max_width');
        // Create Intervention image
        $image = Image::make($file);
        // resize image
        if ($image->width() > $maxWidth) {
            $image->resize($maxWidth, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        }
        return $image;
    }

    public function filterFileName($filename, $beautify = false): array|string|null
    {
        $filteredName = preg_replace('/[^\x{0600}-\x{06FF}A-Za-z0-9.]/u', '-', $filename);
        // optional beautification
        if ($beautify) {
            $filteredName = $this->beautifyFilename($filteredName);
        }
        return $filteredName;
    }

    public function beautifyFilename($filename): string
    {
        // reduce consecutive characters
        // "file   name.zip" becomes "file-name.zip"
        // "file___name.zip" becomes "file-name.zip"
        // "file---name.zip" becomes "file-name.zip"
        $filename = preg_replace(array(
            '/ +/',
            '/_+/',
            '/-+/'
        ), '-', $filename);
        // "file--.--.-.--name.zip" becomes "file.name.zip"
        // "file...name..zip" becomes "file.name.zip"
        $filename = preg_replace(array(
            '/-*\.-*/',
            '/\.{2,}/'
        ), '.', $filename);
        // lowercase for windows/unix interoperability http://support.microsoft.com/kb/100625
        // $filename = mb_strtolower($filename, mb_detect_encoding($filename));
        $filename = mb_strtolower($filename, 'UTF-8');
        // ".file-name.-" becomes "file-name"
        return trim($filename, '.-');
    }

    public function upload_file($name, $dir, $file, $type, $model, $method = 'create'): void
    {
        $path = '/files/'.$type.'/'.$dir;
        $ext  = strtolower($file->getClientOriginalExtension());
        $fileName = $path.'/'.$name.'.'.$ext;
        $name = $name.'.'.$ext;
        $file->move(public_path($path), $fileName);
        if ($method == 'update') {
            $model->avatar()->update(['name'=>$name,'url'=>$fileName]);
        } else {
            $model->avatar()->create(['name'=>$name,'url'=>$fileName]);
        }
    }

    /**
     * @throws ValidationException
     */
    public function upload_base64_file($meeting_body, $process_path): bool|string
    {
        $dom = new DomDocument();
        libxml_use_internal_errors(true);
        if (str_contains($meeting_body,'utf-8')){
            $dom->loadHtml(  $meeting_body );
        }else{
            $dom->loadHtml( '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">' . ( $meeting_body ));
        }
        $image_file = $dom->getElementsByTagName('img');
        $files_size = 0;
        foreach($image_file as $key => $image) {
            $data = $image->getAttribute('src');
            if (!filter_var($data, FILTER_VALIDATE_URL))
            {
                $file_name = $image->getAttribute('data-filename');
                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);
                $img_data = base64_decode($data);
                $image_name =  time().'_'.$file_name;
                $path = storage_path().'/app/public/uploads/'.$process_path.'/' . $image_name;
                file_put_contents($path, $img_data);
                $files_size += (filesize($path)/1024);
                $image->removeAttribute('src');
                $image->setAttribute('src', url('storage/uploads/'.$process_path.'/'.$image_name));
            }
        }
        if ($files_size > 10240){
            throw ValidationException::withMessages([
                'body' => [__('max files exceed')],
            ]);
        }
        return $dom->saveHTML();
    }

}
