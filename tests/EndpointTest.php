<?php

test('alias ping2me should be Ping instance', function () {
    config(['services.ping2me.endpoint' => '@daudau/ping2me']);

    $instance= app('ping2me');

    expect($instance)->toBeInstanceOf(\Ping2Me\Php\Ping::class);
});

test('endpoint should be set from config', function () {
    config(['services.ping2me.endpoint' => '@daudau/ping2me']);

    expect(\Ping2Me\Laravel\Facades\Ping::getFacadeRoot()::$endpoint)->toBe('@daudau/ping2me');
});

test('send a dummy message', function () {
    config(['services.ping2me.endpoint' => '@daudau/ping2me']);

    \Ping2Me\Laravel\Facades\Ping::send("hello ping2me community on Telegram!");
//    ping('hello ping2me community on Telegram!');
});