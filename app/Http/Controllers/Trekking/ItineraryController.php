<?php
namespace App\Http\Controllers\Trekking;
use App\Http\Controllers\Controller;

use App\Models\Trip;
use App\Models\Itinerary;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ItineraryController extends Controller
{
    public function create($trip_id)
    {
        $trip = Trip::findOrFail($trip_id);
        return view('frontend.trekking.itinerary.create', compact('trip'));
    }

    public function store(Request $request, $trip_id)
    {
        $trip = Trip::findOrFail($trip_id);

        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required',
        ]);

        Itinerary::create([
            'trip_id' => $trip->id,
            'question' => $request->question,
            'answer' => $request->answer,
            'slug' => Str::slug($request->question . '-' . time()),
        ]);

        return redirect()->route('tripshow',  ['id' => $trip_id, 'section' => 'itinerary'])->with('success', 'Itinerary added successfully.');
    }

    public function edit($trip_id, $itinerary_id)
    {
        $trip = Trip::findOrFail($trip_id);
        $itinerary = Itinerary::where('trip_id', $trip_id)->findOrFail($itinerary_id);
        return view('frontend.trekking.itinerary.edit', compact('trip', 'itinerary'));
    }
    
    public function update(Request $request, $trip_id, $itinerary_id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
    
        $itinerary = Itinerary::where('trip_id', $trip_id)->findOrFail($itinerary_id);
        $itinerary->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
    
        return redirect()->route('tripshow', ['id' => $trip_id, 'section' => 'itinerary'])->with('success', 'Itinerary updated successfully.');
    }
    

    public function destroy($itinerary_id)
    {
        $itinerary = Itinerary::findOrFail($itinerary_id);
        $trip_id = $itinerary->trip_id;
        $itinerary->delete();

        return redirect()->route('tripshow', ['id' => $trip_id, 'section' => 'itinerary'])->with('success', 'Itinerary deleted successfully.');
    }
}
