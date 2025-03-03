<?php

namespace App\Http\Controllers\Trekking;
use App\Http\Controllers\Controller;
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
    $customMessages = [
        'image.uploaded' => 'Image must be less than 2MB / Image must be of jpg, jpeg, png, gif or webp',
    ];

    $request->validate([
        'name'  => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ], $customMessages);

    $imageName = null;
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/regions'), $imageName);
    }

    Region::create([
        'name'  => $request->name,
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

        $customMessages = [
            'image.uploaded' => 'Image must be less than 2MB / Image must be of jpg, jpeg, png, gif or webp',
        ];
    
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ],$customMessages);

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

   


}
