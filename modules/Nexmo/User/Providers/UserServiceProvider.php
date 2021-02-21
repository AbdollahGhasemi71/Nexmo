<?php

namespace Nexmo\User\Providers;

use  Illuminate\Support\ServiceProvider;
use Nexmo\User\Models\User;

class UserServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/Route.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrastions');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'User');

    }

    public function register()
    {

        config()->set('auth.providers.users.model', User::class);

    }

}
