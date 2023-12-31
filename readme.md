# Ping2me Laravel package

The Laravel package for the [ping2.me](https://ping2.me).

## Installation

```bash
composer require ping2me/laravel
```

## Configuration

Update your `config/services.php` file with the following:

```php
// other services
'ping2me' => [
    'endpoint' => env('PING2ME_ENDPOINT'),
],
```

So you can set up your endpoint in your `.env` file:

```dotenv
PING2ME_ENDPOINT=@daudau/ping2me
```

## Usage

```php
\Ping2Me\Laravel\Facades\Ping::send('Hello world!');
// or 
ping('Hello world!');
```

Then the message will be sent to you Telegram (or Discord, Slack) channel immediately.

## Performance
Don't worry about performance, the package will send the request in the background if your server installed `curl` (which is almost exist in every server).
So there will be almost zero delay about the http request.