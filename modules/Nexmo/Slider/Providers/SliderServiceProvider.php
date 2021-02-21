<?php

namespace Nexmo\Slider\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class SliderServiceProvider extends ServiceProvider
{
    public function boot()
    {


        $this->loadRoutesFrom(__DIR__ . '/../Routes/Router.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'Slider');

    }

    public function register()
    {
    Paginator::useBootstrap();

    }


}
