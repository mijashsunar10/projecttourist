<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Contact;
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
          // For every view in the admin folder, share the unread count
    View::composer('admin.*', function ($view) {
        $view->with('unreadCount', Contact::where('is_read', false)->count());
    });
    }
}
