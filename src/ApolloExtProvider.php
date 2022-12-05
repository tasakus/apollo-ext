<?php

namespace takeshi;

use Illuminate\Support\ServiceProvider;

class ApolloExtProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('ApolloClient', function ($app) {
            return new InviteCode($app['config']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('apollo_config.php'),
        ],'apollo_config');
    }
}
