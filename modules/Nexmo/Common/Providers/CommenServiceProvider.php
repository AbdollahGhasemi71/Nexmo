<?php


namespace Nexmo\Common\Providers;

use Illuminate\Support\ServiceProvider;

class CommenServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'Message');
    }

}
