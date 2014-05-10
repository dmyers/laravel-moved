# Moved Package for Laravel 4

Moved is a URL rewriter for Laravel 4 applications.

## Installation via Composer

Add this to you composer.json file, in the require object:

```javascript
"dmyers/laravel-moved": "dev-master"
```

After that, run composer install to install Storage.

Add the service provider to `app/config/app.php`, within the `providers` array.

```php
'providers' => array(
    // ...
    'Dmyers\Moved\MovedServiceProvider',
)
```

## Usage

Add URLs to the config that should be redirected to your new routes that have moved.