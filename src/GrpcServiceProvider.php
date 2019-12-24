<?php

namespace Yandy\grpc;

use Illuminate\Support\ServiceProvider;

class GrpcServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('ClientFactory', function ($app){
                return new ClientFactory();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/grpc.php' => config_path('grpc.php'),
        ]);
    }
}
