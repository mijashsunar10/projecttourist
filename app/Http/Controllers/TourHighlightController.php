<?php

namespace App\Http\Controllers;

use App\Models\TourHighlight;
use App\Models\Tourtrips;
use Illuminate\Http\Request;

class TourHighlightController extends Controller
{
    //
    public function create($tourtrip_id)
    {   
        $tourtrip = Tourtrips::findOrFail($tourtrip_id);
        return view('frontend.tours.tour_highlights.create', compact('tourtrip'));
    }

    public function store(Request $request, $tourtrip_id)
    {
        $tourtrip = Tourtrips::findOrFail($tourtrip_id);
        $request->validate([
            'tourhighlights' => 'required|array',
            'tourhighlights.*' => 'required|string',
        ]);

        foreach ($request->tourhighlights as $highlight) {
            TourHighlight::create([
                'tourtrip_id' => $tourtrip->id,
                'highlight' => $highlight,
            ]);
        }
        
        return redirect()->route('tourtripshow', ['id' => $tourtrip_id, 'section' => 'highlight'])->with('success', 'Highlights added successfully.');
    }

    public function edit($tourtrip_id)
    {
        $tourtrip = Tourtrips::findOrFail($tourtrip_id);
        $highlights = $tourtrip->tourhighlights;
        return view('frontend.tours.tour_highlights.edit', compact('tourtrip', 'highlights'));
    }
    public function update(Request $request, $tourtrip_id)
    {
        $tourtrip = Tourtrips::findOrFail($tourtrip_id);
    
        // Update existing highlights
        if ($request->has('tourhighlights')) {
            foreach ($request->tourhighlights as $id => $highlightText) {
                if (is_numeric($id)) {
                    $highlight = TourHighlight::findOrFail($id);
                    $highlight->update(['highlight' => $highlightText]);
                }
            }
        }
    
        // Add new highlights
        if ($request->has('tourhighlights.new')) {
            foreach ($request->tourhighlights['new'] as $newHighlight) {
                TourHighlight::create([
                    'tourtrip_id' => $tourtrip->id, // Correct variable
                    'highlight' => $newHighlight,
                ]);
            }
        }
    
        return redirect()->route('tourtripshow', ['id' => $tourtrip_id, 'section' => 'highlight'])->with('success', 'Highlights updated successfully.');
    }

    public function destroy($highlightId)
    {
        $highlight = TourHighlight::findOrFail($highlightId);
        $tourtrip_id = $highlight->tourtrip_id;
        $highlight->delete();

        return redirect()->route('tourtripshow',['id' => $tourtrip_id, 'section' => 'highlight'])->with('success', 'Highlight deleted successfully.');
    }
    
}
