<?php

namespace Zenaton;

use Illuminate\Support\ServiceProvider;
use Zenaton\Console\Commands\MakeTaskCommand;
use Zenaton\Console\Commands\MakeWorkflowCommand;

class ZenatonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot()
    {
        $this->registerPublishing();
        $this->registerCommands();

        Client::init(
            config('zenaton.app_id'),
            config('zenaton.api_token'),
            config('zenaton.app_env')
        );
    }

    /**
     * Register artisan commands.
     *
     * @return void
     */
    private function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeTaskCommand::class,
                MakeWorkflowCommand::class,
            ]);
        }
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    private function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/zenaton.php' => config_path('zenaton.php'),
            ], 'zenaton-config');
        }
    }
}
