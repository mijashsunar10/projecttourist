<?php

namespace App\Http\Controllers;


use App\Models\Trip;
use App\Models\TripHighlight;
use Illuminate\Http\Request;

class TripHighlightController extends Controller
{
    public function create($trip_id)
    {
        $trip = Trip::findOrFail($trip_id);
        return view('frontend.trip_highlights.create', compact('trip'));
    }


    public function store(Request $request, $trip_id)
    {
        $trip = Trip::findOrFail($trip_id);
        $request->validate([
            'highlights' => 'required|array',
            'highlights.*' => 'required|string',
        ]);

        foreach ($request->highlights as $highlight) {
            TripHighlight::create([
                'trip_id' => $trip->id,
                'highlight' => $highlight,
            ]);
        }

        return redirect()->route('tripshow', $trip_id)->with('success', 'Highlights added successfully.');
    }
    public function edit($trip_id)
    {
        $trip = Trip::findOrFail($trip_id);
        $highlights = $trip->highlights;
        return view('frontend.trip_highlights.edit', compact('trip', 'highlights'));
    }
    public function update(Request $request, $trip_id)
    {
        $trip = Trip::findOrFail($trip_id);

        // Update existing highlights
        if ($request->has('highlights')) {
            foreach ($request->highlights as $id => $highlightText) {
                if (is_numeric($id)) {
                    $highlight = TripHighlight::findOrFail($id);
                    $highlight->update(['highlight' => $highlightText]);
                }
            }
        }

        // Add new highlights
        if ($request->has('highlights.new')) {
            foreach ($request->highlights['new'] as $newHighlight) {
                TripHighlight::create([
                    'trip_id' => $trip->id,
                    'highlight' => $newHighlight,
                ]);
            }
        }

        return redirect()->route('tripshow', $trip_id)->with('success', 'Highlights updated successfully.');
    }
        public function destroy($highlightId)
    {
        $highlight = TripHighlight::findOrFail($highlightId);
        $highlight->delete();

        return redirect()->back()->with('success', 'Highlight deleted successfully.');
    }

}
