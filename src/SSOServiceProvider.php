<?php
namespace jaewun\DiscourseSSOLaravel;

use Illuminate\Routing\Router;

class SSOServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupRoutes($this->app->router);

        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('discourse-sso.php'),
        ]);

        $this->mergeConfigFrom(
            __DIR__ . '/config/config.php', 'discourse-sso'
        );

        $enabled = $this->app['config']->get('discourse-sso.enabled');

        if ( ! $enabled) {
            return;
        }
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'Jaewun\DiscourseSSOLaravel\Http\Controllers'], function ($router) {
            require __DIR__ . '/Http/routes.php';
        });
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        config([
            config_path() . 'config/discourse-sso.php',
        ]);
    }

}