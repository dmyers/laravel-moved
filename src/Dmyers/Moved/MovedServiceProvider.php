<?php namespace Dmyers\Moved;

use Illuminate\Support\ServiceProvider;

class MovedServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->router->group(['namespace' => 'Dmyers\Moved'], function($router) {
            include __DIR__.'/../../routes.php';
        });
        
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/moved.php' => config_path('moved.php'),
            ]);
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
