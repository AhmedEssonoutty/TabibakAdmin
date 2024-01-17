<?php

namespace App\Console\Commands\MakeCommands;

use App\Traits\MakeCommandTrait;
use Illuminate\Console\Command;

class MakeTraitCommand extends Command
{
    use MakeCommandTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:trait {traitName} {--namespace=}';
    protected string $traitName;
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create new trait';

    /**
     * Execute the console command.
     *
     * @return string
     */
    public function handle(): string
    {
        $this->traitName = $this->argument('traitName');
        $this->traitName = ucfirst($this->traitName). 'Trait';
        $traitTemplate = $this->getTemplate('trait');
        $templateClass = $this->replaceTemplateContent($traitTemplate);
        $directory = $this->getAppPath('Traits');
        return $this->saveTemplateCopy($directory, $this->traitName.'.php', $templateClass);
    }
    public function replaceTemplateContent($template): string
    {
        return str_replace('{{traitName}}', $this->traitName, $template);
    }
}
