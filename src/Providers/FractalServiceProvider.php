<?php namespace L5\Support\Providers;

use League\Fractal\Manager;
use Illuminate\Support\ServiceProvider;

class FractalServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services
     * 
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services
     * 
     * @return void
     */
    public function register()
    {
        $this->app->singleton('league.fractal', function () {
            return new Manager;
        });
    }
}
