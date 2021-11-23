<?php

namespace edgewizz\fillmcq;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class FillmcqServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edgewizz\Fillmcq\Controllers\FillmcqController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd($this);
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__ . '/components', 'fillmcq');
        Blade::component('fillmcq::fillmcq.open', 'fillmcq.open');
        Blade::component('fillmcq::fillmcq.index', 'fillmcq.index');
        Blade::component('fillmcq::fillmcq.edit', 'fillmcq.edit');
    }
}
