<?php


namespace LaravelSetupAdmin\Providers;

use Illuminate\Support\ServiceProvider;

class InstallerProvider extends ServiceProvider
{



    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../sample/public/dashboard' => public_path('dashboard'),
            __DIR__.'/../sample/views/dashboard' => resource_path('views/dashboard'),
        ]);
    }
}