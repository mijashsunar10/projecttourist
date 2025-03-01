<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
       $tripReviews->transform(function ($review) {
           $review->type = 'trips'; // Add type for trips
           return $review;
       });
   
       // Fetch the latest 4 reviews for tour trips
       $tourtripReviews = TourReview::latest()->take(4)->get();
       $tourtripReviews->transform(function ($review) {
           $review->type = 'tourtrips'; // Add type for tourtrips
           return $review;
       });
   
       // Fetch the latest 4 reviews for mountains
       $mountainReviews = ExpeditionReview::latest()->take(4)->get();
       $mountainReviews->transform(function ($review) {
           $review->type = 'mountains'; // Add type for mountains
           return $review;
       });
   
       // Combine all reviews into a single collection
       $latestReviews = collect([])
           ->merge($tripReviews)
           ->merge($tourtripReviews)
           ->merge($mountainReviews)
           ->sortByDesc('created_at') // Sort by latest
           ->take(4); // Take only the latest 4 reviews
   
    // return view('frontend.reviews.all_combined_reviews', compact('latestReviews', 'combinedReviews')); // Fetch the latest 3 reviews

    
    $recentBlogs = Blog::where('is_approved', true)
            ->latest()
            ->take(3)
            ->get();

        $tours = Tour::with('tourtrips')->get();
        return view('frontend.home.homepage', compact('latestReviews','tours','recentBlogs'));
    
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
