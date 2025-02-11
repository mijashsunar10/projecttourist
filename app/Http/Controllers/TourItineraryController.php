<?php

namespace App\Http\Controllers;

use App\Models\TourItinerary;
use App\Models\Tourtrips;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class TourItineraryController extends Controller
{
    
    public function create($tourtrip_id)
    {
        $tourtrip = Tourtrips::findOrFail($tourtrip_id);
        return view('frontend.tours.touritinerary.create', compact('tourtrip'));
    }

    public function store(Request $request, $tourtrip_id)
    {
        $tourtrip = Tourtrips::findOrFail($tourtrip_id);

        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required',
        ]);

        TourItinerary::create([
            'tourtrip_id' => $tourtrip->id,
            'question' => $request->question,
            'answer' => $request->answer,
            'slug' => Str::slug($request->question . '-' . time()),
        ]);

        return redirect()->route('tourtripshow', $tourtrip_id)->with('success', 'Itinerary added successfully.');
    }

    public function edit($tourtrip_id, $itinerary_id)
    {
        $tourtrip = Tourtrips::findOrFail($tourtrip_id);
        $itinerary = TourItinerary::where('tourtrip_id', $tourtrip_id)->findOrFail($itinerary_id);
        return view('frontend.tours.touritinerary.edit', compact('tourtrip', 'itinerary'));
    }
    
    public function update(Request $request, $tourtrip_id, $itinerary_id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
    
        $itinerary = TourItinerary::where('tourtrip_id', $tourtrip_id)->findOrFail($itinerary_id);
        $itinerary->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
    
        return redirect()->route('tourtripshow', $tourtrip_id)->with('success', 'Itinerary updated successfully.');
    }
    

    public function destroy($itinerary_id)
    {
        $itinerary = TourItinerary::findOrFail($itinerary_id);
        $tourtrip_id = $itinerary->tourtrip_id;
        $itinerary->delete();

        return redirect()->route('tourtripshow', $tourtrip_id)->with('success', 'Itinerary deleted successfully.');
    }


}
