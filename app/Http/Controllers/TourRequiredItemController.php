<?php

namespace App\Http\Controllers;

use App\Models\TourRequiredItem;
use App\Models\Tourtrips;


use Illuminate\Http\Request;

class TourRequiredItemController extends Controller
{
    public function create($tourtrip_id)
    {
        $tourtrip = Tourtrips::findOrFail($tourtrip_id);
        return view('frontend.tours.tourrequireditems.create', compact('tourtrip'));
    }

    public function store(Request $request, $tourtrip_id)
{
    $request->validate([
        'items' => 'required|array',
        'items.*' => 'required|string|max:255'
    ]);

    foreach ($request->items as $item_name) {
        TourRequiredItem::create([
            'tourtrip_id' => $tourtrip_id,
            'item_name' => $item_name,
        ]);
    }

    return redirect()->route('tourtripshow', ['id' => $tourtrip_id, 'section' => 'required'])->with('success', 'Items added successfully.');
}


    public function edit($tourtrip_id, $id)
    {
        $tourtrip = Tourtrips::findOrFail($tourtrip_id);
        $item = TourRequiredItem::findOrFail($id);
        return view('frontend.tours.tourrequireditems.edit', compact('tourtrip', 'item'));
    }

    public function update(Request $request, $tourtrip_id, $id)
    {
        $request->validate(['item_name' => 'required|string|max:255']);

        $item = TourRequiredItem::findOrFail($id);
        $item->update(['item_name' => $request->item_name]);

        return redirect()->route('tourtripshow', ['id' => $item->tourtrip_id, 'section' => 'required'])->with('success', 'Item updated successfully.');
    }

    public function destroy($tourtrip_id, $id)
    {
        $item = TourRequiredItem::findOrFail($id);
        $item->delete();

        return redirect()->route('tourtripshow', $tourtrip_id)->with('success', 'Item deleted successfully.');
    }
}
