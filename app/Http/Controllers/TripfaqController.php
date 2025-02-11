<?php

namespace App\Http\Controllers;
use App\Models\Trip;
use App\Models\Itinerary;
use App\Models\Tripfaq;
use Illuminate\Support\Str;


use Illuminate\Http\Request;

class TripfaqController extends Controller
{
    public function create($trip_id)
    {
        $trip = Trip::findOrFail($trip_id);
        return view('frontend.trekking.tripfaq.create', compact('trip'));
    }
    public function store(Request $request, $trip_id)
    {
        $trip = Trip::findOrFail($trip_id);
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required',
        ]);
        Tripfaq::create([
            'trip_id' => $trip->id,
            'question' => $request->question,
            'answer' => $request->answer,
            'slug' => Str::slug($request->question . '-' . time()),
        ]);
        return redirect()->route('tripshow', $trip_id)->with('success', 'Itinerary added successfully.');
    }
    public function edit($trip_id, $tripfaq_id)
    {
        $trip = Trip::findOrFail($trip_id);
        $tripfaq = Tripfaq::where('trip_id', $trip_id)->findOrFail($tripfaq_id);
        return view('frontend.trekking.tripfaq.edit', compact('trip', 'tripfaq'));
    }
    
    public function update(Request $request, $trip_id, $tripfaq_id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
    
        $tripfaq = Tripfaq::where('trip_id', $trip_id)->findOrFail($tripfaq_id);
        $tripfaq->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
    
        return redirect()->route('tripshow', $trip_id)->with('success', 'tripfaq updated successfully.');
    }
    
    public function destroy($tripfaq_id)
    {
        $tripfaq = Tripfaq::findOrFail($tripfaq_id);
        $trip_id = $tripfaq->trip_id;
        $tripfaq->delete();
        return redirect()->route('tripshow', $trip_id)->with('success', 'tripfaq deleted successfully.');
    }
}
