<?php

namespace App\Providers;

use Fruitcake\Cors\HandleCors;
use Illuminate\Support\ServiceProvider;

class HandleCorsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['router']->middleware('cors', HandleCors::class);
    }
}
