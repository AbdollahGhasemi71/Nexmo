<?php


namespace Nexmo\Contact\Providers;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/Route.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'Contact');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
    }

}
