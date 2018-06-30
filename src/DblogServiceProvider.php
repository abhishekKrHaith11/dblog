<?php

namespace Abhishekkrhaith11\Dblog;

use Illuminate\Support\ServiceProvider;

class DblogServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the configuration file.
            $this->publishes([
                __DIR__.'/../config/dblog.php' => config_path('dblog/dblog.php'),
            ], 'dblog.config');
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/dblog.php', 'dblog');

        // Register the service the package provides.
        $this->app->singleton('dblog', function ($app) {
            return new Dblog;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['dblog'];
    }
}
