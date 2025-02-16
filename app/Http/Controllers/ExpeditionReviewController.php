<?php

namespace App\Http\Controllers;

use App\Models\Expedition;
use App\Models\ExpeditionReview;
use App\Models\Mountain;
use Illuminate\Http\Request;

class ExpeditionReviewController extends Controller
{
    public function store(Request $request, $mountain_id)
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
            $image->move(public_path('images/mountains/reviews'), $imageName);
        }
    
        ExpeditionReview::create([
            'mountain_id' => $mountain_id,
            'name' => $request->name,
            'email' => $request->email,
            'photo' => $imageName,
            'youtube_url' => $request->youtube_url,
            'rating' => $request->rating,
            'review' => $request->review,
        ]);
    
        return redirect()->route('mountainshow', $mountain_id)->with('success', 'Review submitted successfully.');
    }

            public function allReviews($mountain_id)
        {
            // Fetch all reviews for the mountain
            $mountain = Mountain::findOrFail($mountain_id);
            $reviews = ExpeditionReview::where('mountain_id', $mountain_id)->latest()->paginate(10);  // Use pagination for better performance

            return view('frontend.expeditions.reviews.all_reviews', compact('mountain', 'reviews','mountain_id'));
        }


        public function destroy($id)
    {
        $review = ExpeditionReview::findOrFail($id);

        // Delete the image if it exists
        if ($review->photo && file_exists(public_path('images/mountains/reviews/' . $review->photo))) {
            unlink(public_path('images/mountains/reviews/' . $review->photo));
        }

        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
}
