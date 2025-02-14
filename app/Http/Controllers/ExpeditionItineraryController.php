<?php

namespace App\Http\Controllers;

use App\Models\ExpeditionItinerary;
use App\Models\Mountain;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ExpeditionItineraryController extends Controller
{
    public function create($mountain_id)
    {
        $mountain = Mountain::findOrFail($mountain_id);
        return view('frontend.expeditions.itinerary.create', compact('mountain'));
    }

    public function store(Request $request, $mountain_id)
    {
        $mountain = Mountain::findOrFail($mountain_id);

        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required',
        ]);

        ExpeditionItinerary::create([
            'mountain_id' => $mountain->id,
            'question' => $request->question,
            'answer' => $request->answer,
            'slug' => Str::slug($request->question . '-' . time()),
        ]);

        return redirect()->route('mountainshow', $mountain_id)->with('success', 'Itinerary added successfully.');
    }

    public function edit($mountain_id, $itinerary_id)
    {
        $mountain = Mountain::findOrFail($mountain_id);
        $itinerary = ExpeditionItinerary::where('mountain_id', $mountain_id)->findOrFail($itinerary_id);
        return view('frontend.expeditions.itinerary.edit', compact('mountain', 'itinerary'));
    }
    
    public function update(Request $request, $mountain_id, $itinerary_id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
    
        $itinerary = ExpeditionItinerary::where('mountain_id', $mountain_id)->findOrFail($itinerary_id);
        $itinerary->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
    
        return redirect()->route('mountainshow', $mountain_id)->with('success', 'Itinerary updated successfully.');
    }
    

    public function destroy($itinerary_id)
    {
        $itinerary = ExpeditionItinerary::findOrFail($itinerary_id);
        $mountain_id = $itinerary->mountain_id;
        $itinerary->delete();

        return redirect()->route('mountainshow', $mountain_id)->with('success', 'Itinerary deleted successfully.');
    }
}
