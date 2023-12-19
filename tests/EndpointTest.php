<?php

test('endpoint is set from config', function () {
    $instance= app('ping2me');

    expect($instance)->toBeInstanceOf(\Ping2Me\Php\Ping::class);
});