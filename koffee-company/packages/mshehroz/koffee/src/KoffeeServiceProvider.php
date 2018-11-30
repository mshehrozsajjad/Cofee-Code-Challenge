<?php

namespace Msherhoz\Koffee;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Coffee\CoffeeRepository;
use App\Repositories\Coffee\RepositoryInterface;
class KoffeeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //sds

            $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(RepositoryInterface::class, CoffeeRepository::class);
    }
}
