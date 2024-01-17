<?php

namespace App\Traits;

trait MakeCommandTrait
{
    protected string $ds = DIRECTORY_SEPARATOR;

    public function saveTemplateCopy($filePath, $fileName, $template): string
    {
        file_put_contents($filePath . $this->ds . $fileName, $template);
        return $fileName . ' has been created';
    }
    public function getTemplate($name): string
    {
        return file_get_contents(base_path('stubs/' . $name . '.stub'));
    }
    public function getAppPath($path): string
    {
        $ds = $this->ds;
        $appBase = app_path() . $ds;
        $path = str_replace('/', $ds, $path);
        $namespace = $path . $ds;
        return $appBase . $namespace;
    }
    public function makeDirectory($directory): ?bool
    {
        if (!is_dir($directory)) {
            return mkdir($directory, 0755, true);
        }
        return null;
    }
}
