<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Trip;
use Illuminate\Support\Facades\Auth;
  

class RegionController extends Controller
{
    public function index()
    {

            // $regions = Region::withCount('trips')->get()->sortByDesc('created_at');
            $regions = Region::withCount('trips')->get();
            return view('frontend.trekking.region.index',compact('regions'));
            // return view('layouts.header', compact('regions'));
// 
    }

    // public function userindex()
    // {
    //     $regions = Region::withCount('trips')->get();
    //     return view('frontend.region.index',compact('regions'));
    // }
    public function regionscreate()
    {
        return view('frontend.trekking.region.create');
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
        return view('frontend.trekking.region.edit', compact('region'));
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

    public function regionshow($id)
    {
        $region = Region::with('trips')->findOrFail($id);
        return view('frontend.trekking.trips.index', compact('region'));
    }

    // public function userregionshow($id)
    // {
    //     $region = Region::with('trips')->findOrFail($id);
    //     return view('frontend.trips.index1', compact('region'));

    // }


}
