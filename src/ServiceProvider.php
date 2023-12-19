<?php

namespace Ping2Me\Laravel;

use Ping2Me\Php\Ping;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app->bind('ping2me', function () {
            return Ping::make();
        });
    }

    public function boot()
    {
        Ping::$endpoint = $this->app['config']->get('services.ping2me.endpoint');
    }
}