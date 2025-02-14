<?php

namespace App\Http\Controllers;

use App\Models\ExpeditionHighlight;
use App\Models\Mountain;
use Illuminate\Http\Request;

class ExpeditionHighlightController extends Controller
{
    public function create($mountain_id)
    {   
        $mountain = Mountain::findOrFail($mountain_id);
        return view('frontend.expeditions.expedition_highlight.create', compact('mountain'));
    }

    public function store(Request $request, $mountain_id)
    {
        $mountain = Mountain::findOrFail($mountain_id);
        $request->validate([
            'mountainhighlights' => 'required|array',
            'mountainhighlights.*' => 'required|string',
        ]);

        foreach ($request->mountainhighlights as $highlight) {
            ExpeditionHighlight::create([
                'mountain_id' => $mountain->id,
                'highlight' => $highlight,
            ]);
        }
        
        return redirect()->route('mountainshow', $mountain_id)->with('success', 'Highlights added successfully.');
    }

    public function edit($mountain_id)
    {
        $mountain = Mountain::findOrFail($mountain_id);
        $highlights = $mountain->mountainhighlights;
        return view('frontend.expeditions.expedition_highlight.edit', compact('mountain', 'highlights'));
    }
    public function update(Request $request, $mountain_id)
    {
        $mountain = Mountain::findOrFail($mountain_id);
    
        // Update existing highlights
        if ($request->has('mountainhighlights')) {
            foreach ($request->mountainhighlights as $id => $highlightText) {
                if (is_numeric($id)) {
                    $highlight = ExpeditionHighlight::findOrFail($id);
                    $highlight->update(['highlight' => $highlightText]);
                }
            }
        }
    
        // Add new highlights
        if ($request->has('mountainhighlights.new')) {
            foreach ($request->mountainhighlights['new'] as $newHighlight) {
                ExpeditionHighlight::create([
                    'mountain_id' => $mountain->id, // Correct variable
                    'highlight' => $newHighlight,
                ]);
            }
        }
    
        return redirect()->route('mountainshow', $mountain_id)->with('success', 'Highlights updated successfully.');
    }

    public function destroy($highlightId)
    {
        $highlight = ExpeditionHighlight::findOrFail($highlightId);
        $highlight->delete();

        return redirect()->back()->with('success', 'Highlight deleted successfully.');
    }
}
