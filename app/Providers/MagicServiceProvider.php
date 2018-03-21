<?php

namespace App\Providers;
use App;
use Illuminate\Support\ServiceProvider;

class MagicServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('super', function (){
            return new App\Repositories\SuperRepo;
        });
    }
}
