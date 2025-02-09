<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Support\Facades\File;


use Illuminate\Http\Request;


class TourController extends Controller
{
    public function index()
    {

            $tours = Tour::All();
            return view('frontend.tours.index',compact('tours'));

    }

    public function tourcreate()
    {
        return view('frontend.tours.create');
    }

    public function tourstore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/tours'), $imageName);
        }

        Tour::create([
            'name' => $request->name,
            'image' => $imageName,
        ]);

        return redirect()->route('tourindex');

    }

    public function tourdestroy($id)
    {
        $tour = Tour::findOrFail($id);

        if ($tour->image) {

            File::delete(public_path('images/tour/' . $tour->image));
            
        }

        $tour->delete();
        return redirect()->route('tourindex');
    }

    public function touredit($id)
    {
        $tour = Tour::findOrFail($id);
        return view('frontend.tours.edit', compact('tour'));
    }

    public function tourupdate(Request $request, $id)
    {
        $tour = Tour::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/tours'), $imageName);

            // Delete old image
            if ($tour->image) {
                File::delete(public_path('images/tours/' . $tour->image));
            }

            $tour->image = $imageName;
        }

        $tour->name = $request->name;
        $tour->save();

        return redirect()->route('tourindex');
    }

    public function tourshow($id)
    {
        $tour = Tour::with('tourtrips')->findOrFail($id);
        return view('frontend.tourtrips.index', compact('tour'));
    }
}
