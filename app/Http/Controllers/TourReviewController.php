<?php

namespace App\Http\Controllers;

use App\Models\TourReview;
use App\Models\Tourtrips;
use Illuminate\Http\Request;

class TourReviewController extends Controller
{
    public function store(Request $request, $tourtrip_id)
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
            $image->move(public_path('images/tourtrips/reviews'), $imageName);
        }
    
        TourReview::create([
            'tourtrip_id' => $tourtrip_id,
            'name' => $request->name,
            'email' => $request->email,
            'photo' => $imageName,
            'youtube_url' => $request->youtube_url,
            'rating' => $request->rating,
            'review' => $request->review,
        ]);
    
        return redirect()->route('tourtripshow', $tourtrip_id)->with('success', 'Review submitted successfully.');
    }

            public function allReviews($tourtrip_id)
        {
            // Fetch all reviews for the tourtrip
            $tourtrip = Tourtrips::findOrFail($tourtrip_id);
            $reviews = TourReview::where('tourtrip_id', $tourtrip_id)->latest()->paginate(10);  // Use pagination for better performance

            return view('frontend.tours.reviews.all_reviews', compact('tourtrip', 'reviews','tourtrip_id'));
        }


        public function destroy($id)
    {
        $review = TourReview::findOrFail($id);

        // Delete the image if it exists
        if ($review->photo && file_exists(public_path('images/tourtrips/reviews/' . $review->photo))) {
            unlink(public_path('images/tourtrips/reviews/' . $review->photo));
        }

        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
}
