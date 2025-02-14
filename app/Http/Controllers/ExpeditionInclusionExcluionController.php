<?php

namespace App\Http\Controllers;

use App\Models\ExpeditionInclusionExclusion;
use App\Models\Mountain;
use Illuminate\Http\Request;

class ExpeditionInclusionExcluionController extends Controller
{
    public function create($mountainId)
    {
        return view('frontend.expeditions.expeditioninclusions-exclusions.create', compact('mountainId'));
    }
    public function store(Request $request, $mountainId)
    {
        $mountain = Mountain::find($mountainId);
    if (!$mountain) {
        return redirect()->back()->with('error', 'mountain not found.');
    }
    $request->validate([
        'type' => 'required|in:inclusion,exclusion',
        'descriptions' => 'required|array',
        'descriptions.*' => 'required|string',
    ]);
    foreach ($request->descriptions as $description) {
        ExpeditionInclusionExclusion::create([
            'mountain_id' => $mountainId,
            'type' => $request->type,
            'description' => $description,
        ]);
    }
    return redirect()->route('mountainshow', ['id' => $mountainId, 'section' => 'inclusions'])->with('success', 'Items added successfully!'). '#inclusions';
    }
    public function edit($mountainId, ExpeditionInclusionExclusion $inclusionExclusion)
    {
        return view('frontend.expeditions.expeditioninclusions-exclusions.edit', compact('inclusionExclusion', 'mountainId'));
    }
    public function update(Request $request, $mountainId, ExpeditionInclusionExclusion $inclusionExclusion)
    {
        $request->validate(['description' => 'required|string']);
        $inclusionExclusion->update(['description' => $request->description]);
        return redirect()->route('mountainshow', ['id' => $mountainId, 'section' => 'inclusions'])->with('success', 'Item updated successfully!'). '#inclusions';
    }
    public function destroy($mountainId, ExpeditionInclusionExclusion $inclusionExclusion)
    {
        $inclusionExclusion->delete();
        return redirect()->route('mountainshow', ['id' => $mountainId, 'section' => 'inclusions'])->with('success', 'Item deleted successfully!'). '#inclusions';
    }
}
