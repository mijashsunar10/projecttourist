<?php

namespace App\Http\Controllers;
use App\Models\Trip;
use App\Models\TripFact;
use Illuminate\Http\Request;

class TripFactController extends Controller
{
    public function create($trip_id) {
        $trip = Trip::findOrFail($trip_id);
        return view('frontend.trekking.tripfacts.create', compact('trip'));
    }
    
    public function store(Request $request, $trip_id) {
        $request->validate([
            'duration' => 'required',
            'difficulty' => 'required',
            'start_end' => 'required',
            'best_season' => 'required',
            'area' => 'required',
            'max_elevation' => 'required',
            'per_day_walk' => 'required',
            'group_size' => 'required',
            'accommodation' => 'required',
        ]);

        TripFact::create([
            'trip_id' => $trip_id,
            'duration' => $request->duration,
            'difficulty' => $request->difficulty,
            'start_end' => $request->start_end,
            'best_season' => $request->best_season,
            'area' => $request->area,
            'max_elevation' => $request->max_elevation,
            'per_day_walk' => $request->per_day_walk,
            'group_size' => $request->group_size,
            'accommodation' => $request->accommodation,
        ]);

        return redirect()->route('tripshow',  ['id' => $trip_id, 'section' => 'tripfacts'])->with('success', 'Trip Fact added successfully');
    }

    public function edit($trip_id, $fact_id) {
        $trip = Trip::findOrFail($trip_id);
        $fact = TripFact::where('trip_id', $trip_id)->findOrFail($fact_id);
        return view('frontend.trekking.tripfacts.edit', compact('trip', 'fact'));
    }

    public function update(Request $request, $trip_id, $fact_id) {
        $request->validate([
            'duration' => 'required',
            'difficulty' => 'required',
            'start_end' => 'required',
            'best_season' => 'required',
            'area' => 'required',
            'max_elevation' => 'required',
            'per_day_walk' => 'required',
            'group_size' => 'required',
            'accommodation' => 'required',
        ]);

        $fact = TripFact::where('trip_id', $trip_id)->findOrFail($fact_id);
        $fact->update($request->all());

        return redirect()->route('tripshow',  ['id' => $trip_id, 'section' => 'tripfacts'])->with('success', 'Trip Fact updated successfully');
    }

    public function destroy($trip_id, $fact_id) {
        $fact = TripFact::where('trip_id', $trip_id)->findOrFail($fact_id);
        $fact->delete();

        return redirect()->route('tripshow',  ['id' => $trip_id, 'section' => 'tripfacts'])->with('success', 'Trip Fact deleted successfully');
    }

}
