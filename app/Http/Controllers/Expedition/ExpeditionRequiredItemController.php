<?php

namespace App\Http\Controllers\Expedition;
use App\Http\Controllers\Controller;

use App\Models\ExpeditionRequiredItem;
use App\Models\Mountain;
use Illuminate\Http\Request;

class ExpeditionRequiredItemController extends Controller
{
    public function create($mountain_id)
    {
        $mountain = Mountain::findOrFail($mountain_id);
        return view('frontend.expeditions.requireditems.create', compact('mountain'));
    }

    public function store(Request $request, $mountain_id)
{
    $request->validate([
        'items' => 'required|array',
        'items.*' => 'required|string|max:255'
    ]);

    foreach ($request->items as $item_name) {
        ExpeditionRequiredItem::create([
            'mountain_id' => $mountain_id,
            'item_name' => $item_name,
        ]);
    }

    return redirect()->route('mountainshow', ['id' => $mountain_id, 'section' => 'required'])->with('success', 'Items added successfully.');
}


    public function edit($mountain_id, $id)
    {
        $mountain = Mountain::findOrFail($mountain_id);
        $item = ExpeditionRequiredItem::findOrFail($id);
        return view('frontend.expeditions.requireditems.edit', compact('mountain', 'item'));
    }

    public function update(Request $request, $mountain_id, $id)
    {
        $request->validate(['item_name' => 'required|string|max:255']);

        $item = ExpeditionRequiredItem::findOrFail($id);
        $item->update(['item_name' => $request->item_name]);

        return redirect()->route('mountainshow', ['id' => $item->mountain_id, 'section' => 'required'])->with('success', 'Item updated successfully.');
    }

    public function destroy($mountain_id, $id)
    {
        $item = ExpeditionRequiredItem::findOrFail($id);
        $item->delete();

        return redirect()->route('mountainshow',['id' => $item->mountain_id, 'section' => 'required'])->with('success', 'Item deleted successfully.');
    }
}
