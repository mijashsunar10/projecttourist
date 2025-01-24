<?php

namespace App\Http\Controllers;
use App\Models\region;
use App\Models\Trip;
use App\Models\TripImage;
use Illuminate\Http\Request;

class TripDescriptionController extends Controller
{
    
public function addImages(Request $request, $trip_id)
{
    $request->validate([
        'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/trips'), $imageName);

            TripImage::create([
                'trip_id' => $trip_id,
                'image' => $imageName,
            ]);
        }
    }

    return redirect()->route('tripshow', $trip_id)->with('success', 'Images added successfully.');
}
}
