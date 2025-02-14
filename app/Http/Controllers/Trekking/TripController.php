<?php

namespace App\Http\Controllers\Trekking;
use App\Http\Controllers\Controller;
use App\Models\Itinerary;
use App\Models\region;
use App\Models\Trip;
use App\Models\TripFact;
use App\Models\Tripfaq;
use App\Models\TripHighlight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TripController extends Controller
{
    
    public function tripscreate($region_id)
    {
        $region = Region::findOrFail($region_id);
        return view('frontend.trekking.trips.create', compact('region'));

    }
    public function tripsstore(Request $request, $region_id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
            'distance' => 'required|numeric',
            'ascent' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/trips'), $imageName);
        }
    

        Trip::create([
            'region_id' => $region_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'duration' => $request->duration,
            'distance' => $request->distance,
            'ascent' => $request->ascent,
            'image' => $imageName,
        ]);

        // dd($request);

        return redirect()->route('regionsshow', $region_id)->with('success', 'Trip added successfully.');
    }


    public function tripsedit($id)
    {
        $trip = Trip::findOrFail($id);
        return view('frontend.trekking.trips.edit', compact('trip'));
    }
    public function tripsupdate(Request $request, $id)
    {
        $trip = Trip::findOrFail($id);
    
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
            'distance' => 'required|numeric',
            'ascent' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Store existing image if no new image is uploaded
        $imageName = $trip->image;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
    
            // Move new image to the trips directory
            $image->move(public_path('images/trips'), $imageName);
    
            // Delete old image if it exists
            if ($trip->image) {
                $oldImagePath = public_path('images/trips/' . $trip->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        }
    
        // Update trip details
        $trip->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'duration' => $request->duration,
            'distance' => $request->distance,
            'ascent' => $request->ascent,
            'image' => $imageName, // Keeps old image if not changed
        ]);
    
        return redirect()->route('regionsshow', $trip->region_id)->with('success', 'Trip updated successfully.');
    }
    
    
    public function tripsdestroy($id)
    {
        $trip = Trip::findOrFail($id);
        if ($trip->image) {
            unlink(public_path('images/trips/' . $trip->image));
        }
        $trip->delete();

        return redirect()->route('regionsshow', $trip->region_id)->with('success', 'Trip deleted successfully.');
    }

            public function tripShow($trip_id)
        {
        
            $trip = Trip::with('images')->findOrFail($trip_id);
            $itineraries = Itinerary::where('trip_id', $trip_id)->get();
            $highlights = TripHighlight::where('trip_id', $trip_id)->get();
            $tripFacts = TripFact::where('trip_id', $trip_id)->get();
            $tripfaqs = Tripfaq::where('trip_id', $trip_id)->get();
            return view('frontend.trekking.trips.show', compact('trip', 'itineraries','highlights','tripFacts','tripfaqs'));
         

         
       
        }


            

}
