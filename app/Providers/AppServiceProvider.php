<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Materi;
use App\Observers\MateriObserver;

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
        Materi::observe(MateriObserver::class);
    }
}
