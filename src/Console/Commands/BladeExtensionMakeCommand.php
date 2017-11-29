<?php

namespace BitPress\BladeExtension\Console\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\GeneratorCommand;

class BladeExtensionMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:blade';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a custom blade extension class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Blade Extension';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/stubs/blade-extension.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Blade';
    }

    /**
     * Get the desired class name from the input.
     *
     * @return string
     */
    protected function getNameInput()
    {
        $name = trim($this->argument('name'));

        if (Str::endsWith($name, 'Extension')) {
            return $name;
        }

        return sprintf('%sExtension', $name);
    }
}
