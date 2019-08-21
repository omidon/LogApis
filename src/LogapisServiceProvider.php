<?php

namespace Radicloud\LogApis;
/*Don't forget to change your namespace to be your Vendor\Package_name.*/

use Illuminate\Support\ServiceProvider;

class LogapisServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        /* The boot() method is used to boot any routes,
         event listeners, or any other functionality you want to add to your package. */

        include __DIR__.'/routes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      /*The register() method is used to bind any classes or functionality into the app container.*/

        // register our controller
        $this->app->make('Radicloud\LogApis\LogApisController');

        $this->loadViewsFrom(__DIR__.'/views'/*$path*/, 'LogApis'/*$namespace*/);
    }
}

