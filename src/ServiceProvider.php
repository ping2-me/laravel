<?php

namespace Ping2Me\Laravel;

use Ping2Me\Php\Ping;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        Ping::$endpoint = $this->app['config']->get('services.ping2me.endpoint');

        $this->app->bind('ping2me', function ($app) {
            return Ping::make($this->app['config']->get('services.ping2me.endpoint'));
        });
    }
}