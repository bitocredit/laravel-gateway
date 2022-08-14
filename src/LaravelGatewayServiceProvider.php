<?php

namespace Bitocredit\LaravelGateway;

use Illuminate\Support\ServiceProvider;

class LaravelGatewayServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $configPath = __DIR__ . '/../config/gateway.php';
        $publishPath = base_path('config/gateway.php');
        $this->publishes([$configPath => $publishPath]);
    }

    public function register()
    {

        // add facade
        $this->app->bind('Api', function($app) {
            return new Api();
        });

        $this->app->singleton(Api::class , function (){
            return new Api();
        });
    }
}