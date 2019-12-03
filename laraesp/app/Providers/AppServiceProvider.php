<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// --- Solution: Specified key was too long; max key length is 767 bytes
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // --- Solution: Specified key was too long; max key length is 767 bytes
        Schema::defaultStringLength(191);
    }
}
