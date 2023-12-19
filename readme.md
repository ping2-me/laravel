# Ping2me Laravel package

The Laravel package for the [ping2me](https://ping2me.com) API.

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

So you can setup your endpoint in your `.env` file:

```dotenv
PING2ME_ENDPOINT=@daudau/ping2me
```