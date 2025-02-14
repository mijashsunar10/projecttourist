<?php

namespace App\Http\Controllers;

use App\Models\TourInclusionExclusion;
use App\Models\Tourtrips;


use Illuminate\Http\Request;

class TourInclusionExclusionController extends Controller
{
    public function create($tourtripId)
    {
        return view('frontend.tours.tourinclusions-exclusions.create', compact('tourtripId'));
    }
    public function store(Request $request, $tourtripId)
    {
        $tourtrip = Tourtrips::find($tourtripId);
    if (!$tourtrip) {
        return redirect()->back()->with('error', 'tourTrip not found.');
    }
    $request->validate([
        'type' => 'required|in:inclusion,exclusion',
        'descriptions' => 'required|array',
        'descriptions.*' => 'required|string',
    ]);
    foreach ($request->descriptions as $description) {
        TourInclusionExclusion::create([
            'tourtrip_id' => $tourtripId,
            'type' => $request->type,
            'description' => $description,
        ]);
    }
    return redirect()->route('tourtripshow',['id' => $tourtripId, 'section' => 'inclusions'])->with('success', 'Items added successfully!'). '#inclusions';
    }
    public function edit($tourtripId, TourInclusionExclusion $inclusionExclusion)
    {
        return view('frontend.tours.tourinclusions-exclusions.edit', compact('inclusionExclusion', 'tourtripId'));
    }
    public function update(Request $request, $tourtripId, TourInclusionExclusion $inclusionExclusion)
    {
        $request->validate(['description' => 'required|string']);
        $inclusionExclusion->update(['description' => $request->description]);
        return redirect()->route('tourtripshow', ['id' => $tourtripId, 'section' => 'inclusions'])->with('success', 'Item updated successfully!'). '#inclusions';
    }
    public function destroy($tourtripId, TourInclusionExclusion $inclusionExclusion)
    {
        $inclusionExclusion->delete();
        return redirect()->route('tourtripshow', ['id' => $tourtripId, 'section' => 'inclusions'])->with('success', 'Item deleted successfully!'). '#inclusions';
    }
}
