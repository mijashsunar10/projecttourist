<?php

namespace App\Http\Controllers;

use App\Models\region;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    
    public function tripscreate($region_id)
    {
        $region = Region::findOrFail($region_id);
        return view('frontend.trips.create', compact('region'));

    }
    public function tripsstore(Request $request, $region_id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
            'distance' => 'required|numeric',
            'ascent' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/trips'), $imageName);
        }
    

        Trip::create([
            'region_id' => $region_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'duration' => $request->duration,
            'distance' => $request->distance,
            'ascent' => $request->ascent,
            'image' => $imageName,
        ]);

        // dd($request);

        return redirect()->route('regionsshow', $region_id)->with('success', 'Trip added successfully.');
    }

}
