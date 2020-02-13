<?php

namespace App\Providers;

use Illuminate\Notifications\Channels\DatabaseChannel;
use Illuminate\Support\ServiceProvider;
use App\Notifications\CustomDatabaseChannel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            DatabaseChannel::class,
            CustomDatabaseChannel::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

    }


}
