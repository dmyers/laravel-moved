# Moved Package for Laravel 4

Moved is a URL rewriter for Laravel 4 applications.

## Installation via Composer

Add this to you composer.json file, in the require object:

```javascript
"dmyers/laravel-moved": "dev-master"
```

After that, run composer install to install Moved.

Add the service provider to `app/config/app.php`, within the `providers` array.

```php
'providers' => array(
    // ...
    'Dmyers\Moved\MovedServiceProvider',
)
```

## Configuration

Publish the default config file to your application so you can make modifications.

```console
$ php artisan config:publish dmyers/laravel-moved
```

## Usage

Add URLs to the config that should be redirected to your new routes that have moved.
