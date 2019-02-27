<?php

namespace Guiliredu\BrazilianCityMigrationSeed;

use Illuminate\Support\ServiceProvider;

class BrazilianCityMigrationSeedServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
