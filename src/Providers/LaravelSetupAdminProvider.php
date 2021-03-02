<?php

namespace LaravelSetupAdmin\Providers;

use Illuminate\Support\ServiceProvider;
use LaravelSetupAdmin\Commands\InstallCommand;

class LaravelSetupAdminProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    }

    public function boot()
    {
        //
    }
}
