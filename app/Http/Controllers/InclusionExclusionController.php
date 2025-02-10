<?php

namespace App\Http\Controllers;

use App\Models\InclusionExclusion;
use App\Models\Trip;
use Illuminate\Http\Request;

class InclusionExclusionController extends Controller
{
    public function create($tripId)
    {
        return view('frontend.inclusions-exclusions.create', compact('tripId'));
    }
    public function store(Request $request, $tripId)
    {
        $trip = Trip::find($tripId);
    if (!$trip) {
        return redirect()->back()->with('error', 'Trip not found.');
    }
    $request->validate([
        'type' => 'required|in:inclusion,exclusion',
        'descriptions' => 'required|array',
        'descriptions.*' => 'required|string',
    ]);
    foreach ($request->descriptions as $description) {
        InclusionExclusion::create([
            'trip_id' => $tripId,
            'type' => $request->type,
            'description' => $description,
        ]);
    }
    return redirect()->route('tripshow', $tripId)->with('success', 'Items added successfully!');
    }
    public function edit($tripId, InclusionExclusion $inclusionExclusion)
    {
        return view('frontend.inclusions-exclusions.edit', compact('inclusionExclusion', 'tripId'));
    }
    public function update(Request $request, $tripId, InclusionExclusion $inclusionExclusion)
    {
        $request->validate(['description' => 'required|string']);
        $inclusionExclusion->update(['description' => $request->description]);
        return redirect()->route('tripshow', $tripId)->with('success', 'Item updated successfully!');
    }
    public function destroy($tripId, InclusionExclusion $inclusionExclusion)
    {
        $inclusionExclusion->delete();
        return redirect()->route('tripshow', $tripId)->with('success', 'Item deleted successfully!');
    }
}
