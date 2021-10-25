<?php

namespace First\Sum;

use Illuminate\Support\ServiceProvider;

class SumServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('sum', function () {
            return new Sum;
        });

        $this->mergeConfigFrom(__DIR__ . '/Config/main.php','sum');
    }

    public function boot()
    {
        require __DIR__.'\routes\web.php';

        $this->loadViewsFrom(__DIR__.'/views','sum');

        $this->publishes([
            __DIR__.'/Config/main.php'=>    config_path('sum.php'),
            __DIR__.'/views'=>base_path('resources/views/sum'),
            __DIR__.'/Migrations'=>database_path('/migrations'),
        ]);
    }
}
