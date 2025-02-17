<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Contact;
use App\Models\Customize;
use Illuminate\Support\Facades\View;


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
        // Share unread counts separately for Contact and Customize in admin views
        View::composer('admin.*', function ($view) {
            $unreadContactCount = Contact::where('is_read', false)->count();
            $unreadCustomizeCount = Customize::where('is_read', false)->count();

            $view->with([
                'unreadContactCount' => $unreadContactCount,
                'unreadCustomizeCount' => $unreadCustomizeCount,
            ]);
        });
    }
}
