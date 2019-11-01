<?php

namespace ShoutLara\DemoOne;

use Illuminate\Support\ServiceProvider;

class DemoOneServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes/web.php';
        $this->app->make('ShoutLara\DemoOne\DemoOneController');
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
