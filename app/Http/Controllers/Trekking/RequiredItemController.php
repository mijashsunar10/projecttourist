<?php
namespace App\Http\Controllers\Trekking;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\RequiredItem;

class RequiredItemController extends Controller
{
    public function create($trip_id)
    {
        $trip = Trip::findOrFail($trip_id);
        return view('frontend.trekking.requireditems.create', compact('trip'));
    }

    public function store(Request $request, $trip_id)
{
    $request->validate([
        'items' => 'required|array',
        'items.*' => 'required|string|max:255'
    ]);

    foreach ($request->items as $item_name) {
        RequiredItem::create([
            'trip_id' => $trip_id,
            'item_name' => $item_name,
        ]);
    }

    return redirect()->route('tripshow', ['id' => $trip_id, 'section' => 'required'])->with('success', 'Items added successfully.');
}


    public function edit($trip_id, $id)
    {
        $trip = Trip::findOrFail($trip_id);
        $item = RequiredItem::findOrFail($id);
        return view('frontend.trekking.requireditems.edit', compact('trip', 'item'));
    }

    public function update(Request $request, $trip_id, $id)
    {
        $request->validate(['item_name' => 'required|string|max:255']);

        $item = RequiredItem::findOrFail($id);
        $item->update(['item_name' => $request->item_name]);

        return redirect()->route('tripshow', ['id' => $item->trip_id, 'section' => 'required'])->with('success', 'Item updated successfully.');
    }

    public function destroy($trip_id, $id)
    {
        $item = RequiredItem::findOrFail($id);
        $item->delete();

        return redirect()->route('tripshow', $trip_id)->with('success', 'Item deleted successfully.');
    }
}
