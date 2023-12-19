<?php

namespace Ping2Me\Laravel\Facades;

class Ping extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ping2me';
    }
}