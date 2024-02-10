<?php

namespace App\Repositories\SQL;

use App\Models\File;
use App\Repositories\Contracts\FileContract;
use App\Traits\FileUploadTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class FileRepository extends BaseRepository implements FileContract
{

    use FileUploadTrait;

    /**
     * FileRepository constructor.
     * @param File $model
     */
    public function __construct(File $model)
    {
        parent::__construct($model);
    }

    public function createMany(array $attributes = []): bool|File|array|null
    {
        $files = [];
        foreach ($attributes as $attribute) {
            $files[] = $this->create($attribute);
        }
        return $files;
    }

    public function create(array $attributes = []): mixed
    {
        $file = $attributes["file"];
        $data = Arr::except($attributes, ['file']);
        $attributes = $this->upload($file, $data);
        return parent::create($attributes);
    }

    public function saveFileByRelation($model, $fileId): void
    {
        $fileModel = resolve(FileContract::class)->find($fileId);
        $relation = $model->files();
        $relation?->save($fileModel);
    }

    public function remove(Model $model): mixed
    {
        if (Storage::exists($model->url)) {
            Storage::delete($model->url);
        }
        return parent::remove($model);
    }
}
