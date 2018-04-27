<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // $this->app->bind('operation', function() {
        //     return new Operation();
        // });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
