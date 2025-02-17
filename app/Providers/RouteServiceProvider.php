<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {    
        parent::boot();

       
        // Bind 'faq' parameter to use the slug field for Faq model
        Route::bind('faq', function ($value) {
            return \App\Models\Faq::where('slug', $value)->firstOrFail();
        });
    }
}