<?php


namespace App\Http\Controllers\Expedition;
use App\Http\Controllers\Controller;

use App\Models\Expedition;
use Illuminate\Http\Request;

class ExpeditionController extends Controller
{
    public function index()
    {

            // $expeditions = expedition::withCount('trips')->get()->sortByDesc('created_at');
            // $expeditions = expedition::withCount('trips')->get()->sortByDesc('created_at');
            $expeditions = Expedition::withCount('mountains')->get();
            // $expeditions = Expedition::get();
            return view('frontend.expeditions.expeditionregion.index',compact('expeditions'));
            // return view('layouts.header', compact('expeditions'));
    }

   
    public function expeditionscreate()
    {
        return view('frontend.expeditions.expeditionregion.create');
    }

    public function expeditionsstore(Request $request)
    { 
        $customMessages = [
        'image.uploaded' => 'Image must be less than 2MB / Image must be of jpg, jpeg, png, gif or webp',
    ];

    $request->validate([
        'name'  => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:3072',
    ], $customMessages);

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/expeditions'), $imageName);
        }

        Expedition::create([
            'name' => $request->name,
            'image' => $imageName,
        ]);

        return redirect()->route('expeditionsindex');

    }
    public function expeditionsedit($id)
    {
        $expedition = Expedition::findOrFail($id);
        return view('frontend.expeditions.expeditionregion.edit', compact('expedition'));
    }

    public function expeditionsupdate(Request $request, $id)
    {
        $expedition = Expedition::findOrFail($id);

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
            $image->move(public_path('images/expeditions'), $imageName);

            // Delete old image
            if ($expedition->image) {
                unlink(public_path('images/expeditions/' . $expedition->image));
            }

            $expedition->image = $imageName;
        }

        $expedition->name = $request->name;
        $expedition->save();

        return redirect()->route('expeditionsindex');
    }

    public function expeditionsdestroy($id)
    {
        $expedition = Expedition::findOrFail($id);

        if ($expedition->image) {
            unlink(public_path('images/expeditions/' . $expedition->image));
        }

        $expedition->delete();
        return redirect()->route('expeditionsindex');
    }

    public function expeditionshow($id)
    {
        $expedition = Expedition::with('mountains')->findOrFail($id);
        // $expedition = Expedition::findOrFail($id);
        return view('frontend.expeditions.mountain.index', compact('expedition'));
    }

}
