<?php

namespace Asorasoft\Plasgate;

use Illuminate\Support\ServiceProvider;

class PlasgateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('plasgate.php'),
                __DIR__ . '/../src/models' => app_path('Models'),
                __DIR__ . '/../src/migrations' => database_path('migrations'),
            ], 'laravel-plasgate');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'plasgate');

        // Register the main class to use with the facade
        $this->app->singleton('plasgate', function () {
            return new Plasgate;
        });
    }
}
