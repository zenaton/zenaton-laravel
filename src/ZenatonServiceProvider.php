<?php

namespace Zenaton;

use Illuminate\Support\ServiceProvider;

class ZenatonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot()
    {
        $this->registerPublishing();

        Client::init(
            config('zenaton.app_id'),
            config('zenaton.api_token'),
            config('zenaton.app_env')
        );
    }

    /**
     * Register the package's publishable resources.
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
