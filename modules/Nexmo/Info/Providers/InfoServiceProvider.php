<?php


namespace Nexmo\Info\Providers;

 use  Illuminate\Support\ServiceProvider;
class InfoServiceProvider extends  ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../Routes/route.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views','Info');
        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');

    }


}
