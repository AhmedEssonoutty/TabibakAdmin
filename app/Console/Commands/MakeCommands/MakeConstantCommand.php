<?php

namespace App\Console\Commands\MakeCommands;

use App\Traits\MakeCommandTrait;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class MakeConstantCommand extends Command
{
    use MakeCommandTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:constant {constantName} {type} {--namespace=}';
    protected string $constantName;
    protected string $type;
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create new constant , constantName is required , type is required , namespace is optional';

    /**
     * Execute the console command.
     *
     * @return string
     */
    public function handle(): string
    {
        $this->type = $this->argument('type');
        $this->constantName = $this->argument('constantName');
        $this->constantName = ucfirst($this->constantName). 'Constants';
        $constantTemplate = $this->getTemplate('constant');
        $templateClass = $this->replaceTemplateContent($constantTemplate);
        $directory = $this->getAppPath('Constants');
        return $this->saveTemplateCopy($directory, $this->constantName.'.php', $templateClass);
    }
    public function replaceTemplateContent($template): string
    {
        return str_replace(['{{constantName}}', '{{type}}'], [$this->constantName, $this->type], $template);
    }
}
