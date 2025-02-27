<?php

namespace App\Http\Controllers;

use App\Models\ExpeditionReview;
use App\Models\Review;
use App\Models\Tour;
use App\Models\TourReview;
use Illuminate\Http\Request;

class TrekController extends Controller
{
    public function index()
    {
       // Fetch latest 4 reviews for trips
    $tripReviews = Review::latest()->take(4)->get();

    // Fetch latest 4 reviews for tour trips
    $tourtripReviews = TourReview::latest()->take(4)->get();

    // Fetch latest 4 reviews for mountains
    $mountainReviews = ExpeditionReview::latest()->take(4)->get();

    // Combine all reviews into a single collection
    $allReviews = collect([])
        ->merge($tripReviews)
        ->merge($tourtripReviews)
        ->merge($mountainReviews);

    // Sort the combined collection by created_at in descending order
    $sortedReviews = $allReviews->sortByDesc('created_at');

    // Take only the latest 4 reviews for the "Latest Reviews" section
    $latestReviews = $sortedReviews->take(4);

    // Paginate the combined collection for the "View All Reviews" page
    $combinedReviews = new \Illuminate\Pagination\LengthAwarePaginator(
        $sortedReviews,
        $sortedReviews->count(),
        10, // Items per page
        null, // Current page
        ['path' => \Illuminate\Pagination\Paginator::resolveCurrentPath()]
    );

    // return view('frontend.reviews.all_combined_reviews', compact('latestReviews', 'combinedReviews')); // Fetch the latest 3 reviews

        $tours = Tour::with('tourtrips')->get();
        return view('frontend.home.homepage', compact('latestReviews','tours', 'combinedReviews'));
    }
    public function contact()
    {
        return view('frontend.contact.contact');
    }

    public function blog()
    {
        return view('frontend.media.blog');
    }
    public function news()
    {
        return view('frontend.media.news');
    }
    public function testimonials()
    {
        return view('frontend.media.testimonials');
    }
    public function faq()
    {
        return view('frontend.media.faq');
    }

    public function region()
    {
        return view('frontend.trekking.region');
    }

    public function trekinfo()
    {
        return view('frontend.trekking.trekinfo');
    }
    public function trekmain()
    {
        return view('frontend.trekking.main');
    }
    public function trekmain1()
    {
        return view('frontend.trekking.main1');
    }
    public function customize()
    {
        return view('frontend.customize.customize');
    }
    public function gallery()
    {
        return view('frontend.media.gallery');
    }

    public function terms()
    {
        return view('frontend.company.terms');
    }
    public function aboutus()
    {
        return view('frontend.company.aboutus');
    }
    public function payment()
    {
        return view('frontend.company.payment');
    }
    public function documents()
    {
        return view('frontend.company.documents');
    }
    public function ourteam()
    {
        return view('frontend.company.ourteam');
    }
}
