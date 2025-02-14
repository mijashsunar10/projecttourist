<?php

namespace App\Http\Controllers;

use App\Models\ExpeditionFact;
use App\Models\Mountain;
use Illuminate\Http\Request;

class ExpeditionFactController extends Controller
{
    public function create($mountain_id) {
        $mountain = Mountain::findOrFail($mountain_id);
        if ($mountain->mountainfacts) {
            return redirect()->back()->with('error', 'You can only add one Expedition Fact per mountain.');
        }
        return view('frontend.expeditions.expeditionfacts.create', compact('mountain'));
    }
    
    public function store(Request $request, $mountain_id) {
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

        ExpeditionFact::create([
            'mountain_id' => $mountain_id,
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

        return redirect()->route('mountainshow', ['id' => $mountain_id, 'section' => 'tripfacts'])->with('success', 'mountain Fact added successfully');
    }

    public function edit($mountain_id, $fact_id) {
        $mountain = mountain::findOrFail($mountain_id);
        $fact = ExpeditionFact::where('mountain_id', $mountain_id)->findOrFail($fact_id);
        return view('frontend.expeditions.expeditionfacts.edit', compact('mountain', 'fact'));
    }

    public function update(Request $request, $mountain_id, $fact_id) {
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

        $fact = ExpeditionFact::where('mountain_id', $mountain_id)->findOrFail($fact_id);
        $fact->update($request->all());

        return redirect()->route('mountainshow',['id' => $mountain_id, 'section' => 'tripfacts'])->with('success', 'mountain Fact updated successfully');
    }

        public function destroy($mountain_id, $fact_id) {
            $fact = ExpeditionFact::where('mountain_id', $mountain_id)->findOrFail($fact_id);
            $fact->delete();

            return redirect()->route('mountainshow', ['id' => $mountain_id, 'section' => 'tripfacts'])->with('success', 'mountain Fact deleted successfully');
        }
}
