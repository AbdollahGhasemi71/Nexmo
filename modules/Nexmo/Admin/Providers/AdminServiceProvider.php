<?php

namespace Nexmo\Admin\Providers;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/Route.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'Admin');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');

    }

}
