<?php

namespace NorthernEstateAgencies\PackageBoilerplate;

use Illuminate\Support\ServiceProvider;

class PackageBoilerplateServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
