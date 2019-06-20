<?php

namespace Zenaton\Console\Commands;

use Illuminate\Console\GeneratorCommand;

final class MakeTaskCommand extends GeneratorCommand
{
    /**
     * {@inheritdoc}
     */
    protected $signature = 'zenaton:make:task {name : The name of the task}';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Create a new task class';

    /**
     * {@inheritdoc}
     */
    protected $type = 'Task class';

    /**
     * {@inheritdoc}
     */
    protected function getStub(): string
    {
        return __DIR__.'/stubs/task.stub';
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Zenaton\Tasks';
    }
}
