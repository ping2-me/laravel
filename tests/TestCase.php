<?php

namespace Ping2Me\Laravel\Tests;

use Orchestra\Testbench\Concerns\WithWorkbench;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    use WithWorkbench;


    public function defineEnvironment($app)
    {
        $app['config']->set('services.ping2me.endpoint', '@daudau/ping2me');
    }
}
