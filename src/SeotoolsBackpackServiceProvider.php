<?php

namespace Thomascombe\SeotoolsBackpack;

use Illuminate\Support\ServiceProvider;

class SeotoolsBackpackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // publish the migrations and seeds
            $this->publishes([__DIR__.'/database/migrations/' => database_path('migrations')], 'migrations');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {

    }
}
