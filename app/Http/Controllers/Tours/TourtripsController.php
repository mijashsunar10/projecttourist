<?php

namespace App\Http\Controllers\Tours;
use App\Http\Controllers\Controller;

use App\Models\Tour;
use App\Models\TourFact;
use App\Models\Tourfaq;
use App\Models\TourHighlight;
use App\Models\TourItinerary;
use App\Models\TourReview;
use App\Models\Tourtrips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TourtripsController extends Controller
{
    public function tourtripscreate($tour_id)
    {
        $tour = Tour::findOrFail($tour_id);
        return view('frontend.tours.tourtrips.create', compact('tour'));
    }
    public function tourtripsstore(Request $request, $tour_id)
    {
        $customMessages = [
            'image.uploaded' => 'Image must be less than 2MB / Image must be of jpg, jpeg, png, gif or webp',
        ];
    

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'distance' => 'required|string|max:255',
          
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ],$customMessages);

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/tourtrips'), $imageName);
        }


        Tourtrips::create([
            'tour_id' => $tour_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'duration' => $request->duration,
            'distance' => $request->distance,
            
            'image' => $imageName,
        ]);

        // dd($request);

        return redirect()->route('tourshow', $tour_id)->with('success', 'Trip added successfully.');
    }

    public function tourtripdestroy($id)
    {
        $tourtrip = Tourtrips::findOrFail($id);

        if ($tourtrip->image) {

            File::delete(public_path('images/tourtrips/' . $tourtrip->image));
        }

        $tourtrip->delete();

        return back()->with('success', 'Trip deleted successfully.');
    }

    public function edit($id)
    {
        $tourtrip = Tourtrips::findOrFail($id);
        return view('frontend.tours.tourtrips.edit', compact('tourtrip'));
    }

    public function update(Request $request, $id)
    {
        $tourtrip = Tourtrips::findOrFail($id);

        $customMessages = [
            'image.uploaded' => 'Image must be less than 2MB / Image must be of jpg, jpeg, png, gif or webp',
        ];
    
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'distance' => 'required|string|max:255',
           
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ],$customMessages);

        // Store existing image if no new image is uploaded
        $imageName = $tourtrip->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Move new image to the trips directory
            $image->move(public_path('images/tourtrips'), $imageName);

            // Delete old image if it exists
            if ($tourtrip->image) {
                $oldImagePath = public_path('images/tourtrips/' . $tourtrip->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        }

        // Update trip details
        $tourtrip->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'duration' => $request->duration,
            'distance' => $request->distance,
           
            'image' => $imageName, // Keeps old image if not changed
        ]);

        return redirect()->route('tourshow', $tourtrip->tour_id)->with('success', 'Trip updated successfully.');
    }

    public function tourtripshow($tourtrip_id)
    {
        $tourtrip= Tourtrips::with('images')->findOrFail($tourtrip_id);
        $itineraries = TourItinerary::where('tourtrip_id', $tourtrip_id)->get();
        $tourFacts=TourFact::where('tourtrip_id', $tourtrip_id)->get();
        $highlights = TourHighlight::where('tourtrip_id', $tourtrip_id)->get();
        $tourfaqs = Tourfaq::where('tourtrip_id', $tourtrip_id)->get();
        $tourreviews = TourReview::where('tourtrip_id', $tourtrip_id)
            ->latest()  // Get the latest reviews
            ->take(4)   // Limit to 3 reviews
            ->get();
            $entity_type = 'tourtrip';
        return view('frontend.tours.tourtrips.show', compact('tourtrip','tourFacts','highlights','itineraries','tourfaqs','tourreviews','tourtrip_id','entity_type'));
    }
}
