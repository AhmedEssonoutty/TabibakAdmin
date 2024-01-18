<?php

namespace App\Console\Commands\MakeCommands;

use App\Traits\MakeCommandTrait;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use Symfony\Component\Console\Command\Command as CommandAlias;

class MakeRepositoryCommand extends Command
{
    use MakeCommandTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repo {modelName} {--options=} {--namespace=} {--web} {--api}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'it takes modelName required, namespace & api
    are optional params for web / api controllers & requests';
    protected bool $api = false;
    protected bool $web = false;
    protected string $modelName;
    protected string $modelObject;
    protected string $webNamespace;
    protected string $apiNamespace;

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $this->api = !($this->option('api') === "");
        $this->web = !($this->option('web') === "");
        $this->modelName = $this->argument('modelName');
        $this->modelObject = Str::camel($this->modelName);
        $this->modelName = ucfirst($this->modelObject);
        $this->info('Creating Repository for ' . $this->modelName);
        $this->info($this->createModel());
        $this->info($this->createRepository());
        $this->info($this->createContract());
        if ($this->web) {
            $this->info($this->createController('web'));
            $this->info($this->createRequest('web'));
        }
        if ($this->api) {
            $this->info($this->createController('api'));
            $this->info($this->createRequest('api'));
            $this->info($this->createResource());
        }
        return CommandAlias::SUCCESS;
    }
    public function getNamespace(): string
    {
        $namespace = $this->option('namespace');
        if ($namespace !== "") {
            return  $this->ds . str_replace('/', $this->ds, $this->option('namespace')) . $this->ds;
        }
        return "";
    }
    public function createModel(): string
    {
        $this->call('make:model', ['name' => $this->modelName, '-m' => true]);
        return Artisan::output();
    }
    public function createRepository(): string
    {
        $modelName = $this->modelName;
        $template = file_get_contents(base_path('stubs/repository.stub'));
        $templateClass = $this->replaceTemplateContent($template);
        $directory = $this->getRepositoriesPath();
        $this->makeDirectory($directory . 'SQL');
        $filePath = $directory . 'SQL';
        $fileName = $modelName . 'Repository' . '.php';
        return $this->saveTemplateCopy($filePath, $fileName, $templateClass);
    }
    public function createContract(): string
    {
        $modelName = $this->modelName;
        $template = file_get_contents(base_path('stubs/contract.stub'));
        $templateClass = $this->replaceTemplateContent($template, $modelName);
        $directory = $this->getRepositoriesPath();
        $this->makeDirectory($directory . 'Contracts');
        $filePath = $directory . 'Contracts';
        $fileName = $modelName . 'Contract' . '.php';
        return $this->saveTemplateCopy($filePath, $fileName, $templateClass);
    }
    public function getRepositoriesPath(): string
    {
        $ds = $this->ds;
        $appBase = app_path() . $ds;
        $repositoriesNamespace = 'Repositories' . $ds;
        return $appBase . $repositoriesNamespace;
    }
    public function createController($type): string
    {
        $file = base_path($type === 'web' ? 'stubs/custom-controller.web.stub' : 'stubs/custom-controller.api.stub');
        $template =  file_get_contents($file);
        $templateClass = $this->replaceTemplateContent($template);
        $directory = $this->getControllerPath($type);
        $this->makeDirectory($directory);
        $fileName = $this->modelName . 'Controller' . '.php';
        return $this->saveTemplateCopy($directory, $fileName, $templateClass);
    }
    public function getControllerPath($type): string
    {
        $ds = $this->ds;
        $controllerNamespace = 'Http' . $ds . 'Controllers' . $ds . $this->getNamespace();
        if ($type === 'api') {
            $controllerNamespace = 'Http' . $ds . 'Controllers' . $ds . 'Api' . $ds . 'V1' . $ds. 'Web'. $ds . $this->getNamespace();
        }
        return app_path() . $ds . $controllerNamespace;
    }
    public function createRequest($type): string
    {
        $template = file_get_contents(base_path('stubs/custom-request.stub'));
        $templateClass = $this->replaceTemplateContent($template);
        $directory = $this->getRequestPath($type);
        $this->makeDirectory($directory);
        $fileName = $this->modelName . 'Request' . '.php';
        return $this->saveTemplateCopy($directory, $fileName, $templateClass);
    }
    public function getRequestPath($type): string
    {
        $ds = $this->ds;
        $requestNamespace = 'Http' . $ds . 'Requests' . $ds;
        return app_path() . $ds . $requestNamespace;
    }
    public function createResource(): string
    {
        $template = file_get_contents(base_path('stubs/custom-resource.stub'));
        $templateClass = $this->replaceTemplateContent($template);
        $directory = $this->getResourcePath();
        $this->makeDirectory($directory);
        $fileName = $this->modelName . 'Resource' . '.php';
        return $this->saveTemplateCopy($directory, $fileName, $templateClass);
    }
    public function getResourcePath(): string
    {
        $ds = $this->ds;
        $resourceNamespace = 'Http' . $ds . 'Resources' . $ds;
        return app_path() . $ds. $resourceNamespace;
    }
    public function replaceTemplateContent($template): array|string
    {
        $search = [
            '{{modelName}}',
            '{{namespace}}',
            '{{modelObject}}'
        ];
        $namespace = $this->option('namespace');
        $namespace = mb_substr($namespace,  -1) === '/' ? substr($namespace, 0, -1) : $namespace;
        $replace = [
            $this->modelName,
            ($namespace) ? '\\' . str_replace('/', '\\', $namespace) : '',
            $this->modelObject ?? '',
        ];
        return str_replace($search, $replace, $template);
    }
}
