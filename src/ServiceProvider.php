<?php

namespace Ping2Me\Laravel;

use Ping2Me\Php\Ping;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app->bind('ping2me', function ($app) {
            return new Ping(
                $app['config']->get('services.ping2me.endpoint')
            );
        });
    }
}