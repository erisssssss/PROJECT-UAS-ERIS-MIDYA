<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Brgm;
use App\Models\Brgk;
use App\Observers\BrgmObserver;
use App\Observers\BrgkObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Daftarkan observer untuk model Brgm
        Brgm::observe(BrgmObserver::class);

        // Daftarkan observer untuk model Brgk
        Brgk::observe(BrgkObserver::class);
    }
}

