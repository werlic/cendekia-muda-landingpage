<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        // Register learning app components
        Blade::component('learning-sidebar', \App\View\Components\Learning\Sidebar::class);
        Blade::component('learning-header', \App\View\Components\Learning\Header::class);
    }
}
