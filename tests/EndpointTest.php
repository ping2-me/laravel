<?php

test('alias ping2me should be Ping instance', function () {
    $instance= app('ping2me');

    expect($instance)->toBeInstanceOf(\Ping2Me\Php\Ping::class);
});

test('endpoint should be set from config', function () {
    expect(\Ping2Me\Laravel\Facades\Ping::getFacadeRoot()::$endpoint)->toBe('@daudau/ping2me');
});

//test('send a dummy message', function () {
//    \Ping2Me\Laravel\Facades\Ping::send("This is a test message from Facade");
//    ping('this is a test message from function');
//});