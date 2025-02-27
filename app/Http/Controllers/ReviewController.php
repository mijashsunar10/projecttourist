<?php

namespace App\Http\Controllers;

use App\Models\ExpeditionReview;
use Illuminate\Support\Facades\Storage;

use App\Models\Review;
use App\Models\TourReview;
use App\Models\Trip;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, $trip_id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'youtube_url' => 'nullable|url',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string',
        ]);
    
        $imageName = null;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/trips/reviews'), $imageName);
        }
    
        Review::create([
            'trip_id' => $trip_id,
            'name' => $request->name,
            'email' => $request->email,
            'photo' => $imageName,
            'youtube_url' => $request->youtube_url,
            'rating' => $request->rating,
            'review' => $request->review,
        ]);
    
        return redirect()->route('tripshow', $trip_id)->with('success', 'Review submitted successfully.');
    }

            public function allReviews($trip_id)
        {
            // Fetch all reviews for the trip
            $trip = Trip::findOrFail($trip_id);
            $reviews = Review::where('trip_id', $trip_id)->latest()->paginate(10);  // Use pagination for better performance

            return view('frontend.trekking.reviews.all_reviews', compact('trip', 'reviews','trip_id'));
        }


        public function destroy($id)
    {
        $review = Review::findOrFail($id);

        // Delete the image if it exists
        if ($review->photo && file_exists(public_path('images/trips/reviews/' . $review->photo))) {
            unlink(public_path('images/trips/reviews/' . $review->photo));
        }

        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully.');
    }

    public function allCombinedReviews()
    {
        // Fetch all reviews for trips
        $tripReviews = Review::latest()->paginate(10, ['*'], 'trip_page');
        $tripReviews->getCollection()->transform(function ($review) {
            $review->type = 'trips'; // Add type for trips
            return $review;
        });
    
        // Fetch all reviews for tour trips
        $tourtripReviews = TourReview::latest()->paginate(10, ['*'], 'tourtrip_page');
        $tourtripReviews->getCollection()->transform(function ($review) {
            $review->type = 'tourtrips'; // Add type for tourtrips
            return $review;
        });
    
        // Fetch all reviews for mountains
        $mountainReviews = ExpeditionReview::latest()->paginate(10, ['*'], 'mountain_page');
        $mountainReviews->getCollection()->transform(function ($review) {
            $review->type = 'mountains'; // Add type for mountains
            return $review;
        });
    
        // Combine all reviews into a single collection
        $allReviews = collect([])
            ->merge($tripReviews->items())
            ->merge($tourtripReviews->items())
            ->merge($mountainReviews->items());
    
        // Paginate the combined collection
        $combinedReviews = new \Illuminate\Pagination\LengthAwarePaginator(
            $allReviews,
            $tripReviews->total() + $tourtripReviews->total() + $mountainReviews->total(),
            10, // Items per page
            null, // Current page
            ['path' => \Illuminate\Pagination\Paginator::resolveCurrentPath()]
        );
    
        return view('frontend.reviews.all_combined_reviews', compact('combinedReviews'));
    }
    
}
