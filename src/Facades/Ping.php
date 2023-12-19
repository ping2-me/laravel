<?php

namespace Ping2Me\Laravel\Facades;

/**
 * @mixin \Ping2Me\Php\Ping
 */
class Ping extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ping2me';
    }
}