<?php

namespace Ping2Me\Laravel;

use Illuminate\Support\Facades\Config;
use Ping2Me\Php\Ping;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app->singleton('ping2me', function () {
            return new Ping(Config::get('services.ping2me.endpoint'));
        });
    }
}