<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Expedition;
use App\Models\Region;
use App\Models\Tour;
use Illuminate\Support\Facades\View;
use App\Models\Customize;
use App\Models\Booking;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        $regions = Region::with('trips')->get(); // Load regions with their trips
        $tours = Tour::with('tourtrips')->get();
        $expeditions = Expedition::with('mountains')->get();
        View::share(['regions'=> $regions, 'tours'=>$tours, 'expeditions'=>$expeditions]);

        View::composer('admin.*', function ($view) {
            $unreadContactCount = Contact::where('is_read', false)->count();
            $unreadCustomizeCount = Customize::where('is_read', false)->count();
            $unreadBookingCount = Booking::where('is_read', false)->count();
            $view->with([
                'unreadContactCount' => $unreadContactCount,
                'unreadCustomizeCount' => $unreadCustomizeCount,
                'unreadBookingCount' => $unreadBookingCount
                
            ]);
        });
        
    }
}
