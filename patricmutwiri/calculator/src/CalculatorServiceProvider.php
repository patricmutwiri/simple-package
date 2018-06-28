<?php

namespace Patricmutwiri\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Patricmutwiri\Calculator\CalculatorController');
         $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }
}
