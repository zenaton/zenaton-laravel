<?php

namespace Zenaton\Console\Commands;

use Illuminate\Console\GeneratorCommand;

final class MakeWorkflowCommand extends GeneratorCommand
{
    /**
     * {@inheritdoc}
     */
    protected $signature = 'zenaton:make:workflow {name : The name of the workflow}';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Create a new workflow class';

    /**
     * {@inheritdoc}
     */
    protected $type = 'Workflow class';

    /**
     * {@inheritdoc}
     */
    protected function getStub(): string
    {
        return __DIR__.'/stubs/workflow.stub';
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Zenaton\Workflows';
    }
}
