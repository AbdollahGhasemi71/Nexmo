<?php

namespace  Nexmo\Front\Providers;
use Illuminate\Support\ServiceProvider;
class FrontServiceProvider extends   ServiceProvider
{
    public function boot()
    {
       $this->loadRoutesFrom(__DIR__.'/../Routes/Route.php');
       $this->loadViewsFrom(__DIR__.'/../resources/views','Front');

    }

}
