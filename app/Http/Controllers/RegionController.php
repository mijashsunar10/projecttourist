<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;  

class RegionController extends Controller
{
    public function index()
    {
        $regions = Region::all();
        return view('frontend.region.index',compact('regions'));
    }
    public function regionscreate()
    {
        return view('frontend.region.create');
    }

    public function regionsstore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/regions'), $imageName);
        }

        Region::create([
            'name' => $request->name,
            'image' => $imageName,
        ]);

        return redirect()->route('regionsindex');

    }
    public function regionsedit($id)
    {
        $region = Region::findOrFail($id);
        return view('frontend.region.edit', compact('region'));
    }

    public function regionsupdate(Request $request, $id)
    {
        $region = Region::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/regions'), $imageName);

            // Delete old image
            if ($region->image) {
                unlink(public_path('images/regions/' . $region->image));
            }

            $region->image = $imageName;
        }

        $region->name = $request->name;
        $region->save();

        return redirect()->route('regionsindex');
    }

    public function regionsdestroy($id)
    {
        $region = Region::findOrFail($id);

        if ($region->image) {
            unlink(public_path('images/regions/' . $region->image));
        }

        $region->delete();
        return redirect()->route('regionsindex');
    }


}
