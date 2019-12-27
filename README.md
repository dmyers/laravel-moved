# Moved Package for Laravel 5

Moved is a URL rewriter for Laravel 5 applications.

## Installation via Composer

Add this to you composer.json file, in the require object:

```javascript
"dmyers/laravel-moved": "dev-master"
```

After that, run composer install to install Moved.

## Laravel 4

Use the `1.0` branch or the `v1.*` tags for Laravel 4 support.

## Configuration

Publish the default config file to your application so you can make modifications.

```console
$ php artisan vendor:publish
```

## Usage

Add URLs to the config that should be redirected to your new routes that have moved.
