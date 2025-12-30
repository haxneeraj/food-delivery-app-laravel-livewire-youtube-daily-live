<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DirectoryTree\Authorization\Authorization;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Authorization::ignoreMigrations();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
