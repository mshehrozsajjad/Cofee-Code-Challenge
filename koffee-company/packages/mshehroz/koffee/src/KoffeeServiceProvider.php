<?php

namespace Msherhoz\Koffee;

use Illuminate\Support\ServiceProvider;

class KoffeeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        require __DIR__.'/routes/routes.php';
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
