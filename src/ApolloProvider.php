<?php

namespace tasakus;

use Illuminate\Support\ServiceProvider;
use tasakus\ApolloClient;
use tasakus\Console\ApolloWorker;

class ApolloProvider extends ServiceProvider
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
            return new ApolloClient();
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

        if ($this->app->runningInConsole()){
            $this->commands([
                ApolloWorker::class
            ]);
        }
    }
}
