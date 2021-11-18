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
        $this->loadViewsFrom(__DIR__ . '/components', 'Fillmcq');
        Blade::component('Fillmcq::Fillmcq.open', 'Fillmcq.open');
        Blade::component('Fillmcq::Fillmcq.index', 'Fillmcq.index');
        Blade::component('Fillmcq::Fillmcq.edit', 'Fillmcq.edit');
    }
}
