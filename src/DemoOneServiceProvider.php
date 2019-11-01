<?php

namespace ShoutLara\DemoOne;

use Illuminate\Support\ServiceProvider;
use ShoutLara\DemoOne\Services\DemoOne;
class DemoOneServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
//        include __DIR__.'/routes/web.php';
//        $this->app->make('ShoutLara\DemoOne\DemoOneController');
//        
        $this->app->bind('demoone', function () 
        {
            return new DemoOne();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
