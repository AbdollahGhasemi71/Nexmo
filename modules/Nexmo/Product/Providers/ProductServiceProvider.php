<?php

namespace Nexmo\Product\Providers;

use  Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/Route.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'Product');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
    }

    public function register()
    {

    }

}
