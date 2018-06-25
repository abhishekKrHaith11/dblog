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
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'abhishekkrhaith11');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'abhishekkrhaith11');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the configuration file.
            $this->publishes([
                __DIR__.'/../config/dblog.php' => config_path('dblog/dblog.php'),
            ], 'dblog.dblog');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/abhishekkrhaith11'),
            ], 'dblog.views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/abhishekkrhaith11'),
            ], 'dblog.views');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/abhishekkrhaith11'),
            ], 'dblog.views');*/

            // Registering package commands.
            // $this->commands([]);
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