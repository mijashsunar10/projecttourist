<?php

namespace App\Http\Controllers;

use App\Models\TourFact;
use App\Models\Tourtrips;
use Illuminate\Http\Request;

class TourFactController extends Controller
{
    public function create($tourtrip_id) {
        $tourtrip = Tourtrips::findOrFail($tourtrip_id);
        return view('frontend.tourfacts.create', compact('tourtrip'));
    }

    public function store(Request $request, $tourtrip_id) {
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

        TourFact::create([
            'tourtrip_id' => $tourtrip_id,
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

        return redirect()->route('tourtripshow', $tourtrip_id)->with('success', 'Trip Fact added successfully');
    }

    public function edit($tourtrip_id, $fact_id)
    {
        $tourtrip = Tourtrips::findOrFail($tourtrip_id);
        $fact = TourFact::where('tourtrip_id', $tourtrip_id)->findOrFail($fact_id);
        return view('frontend.tourfacts.edit', compact('tourtrip', 'fact'));
    }

    public function update(Request $request, $tourtrip_id, $fact_id) {
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

        $fact = TourFact::where('tourtrip_id', $tourtrip_id)->findOrFail($fact_id);
        $fact->update($request->all());

        return redirect()->route('tourtripshow', $tourtrip_id)->with('success', 'Trip Fact updated successfully');
    }


    public function destroy($tourtrip_id, $fact_id) {
        $fact = TourFact::where('tourtrip_id', $tourtrip_id)->findOrFail($fact_id);
        $fact->delete();

        return redirect()->route('tourtripshow', $tourtrip_id)->with('success', 'Trip Fact deleted successfully');
    }
}
