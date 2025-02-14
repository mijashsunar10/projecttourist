<?php

namespace App\Http\Controllers;

use App\Models\Expedition;
use App\Models\Mountain;
use Illuminate\Http\Request;

class MountainController extends Controller
{
    public function mountainscreate($expedition_id)
    {
        $expedition = Expedition::findOrFail($expedition_id);
        return view('frontend.expeditions.mountain.create', compact('expedition'));

    }
    public function mountainsstore(Request $request, $expedition_id)
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
            $image->move(public_path('images/mountains'), $imageName);
        }
    

        Mountain::create([
            'expedition_id' => $expedition_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'duration' => $request->duration,
            'distance' => $request->distance,
            'ascent' => $request->ascent,
            'image' => $imageName,
        ]);

        // dd($request);

        return redirect()->route('expeditionsshow', $expedition_id)->with('success', 'mountain added successfully.');
    }


    public function mountainsedit($id)
    {
        $mountain = Mountain::findOrFail($id);
        return view('frontend.expeditions.mountain.edit', compact('mountain'));
    }
    public function mountainsupdate(Request $request, $id)
    {
        $mountain = Mountain::findOrFail($id);
    
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
            'distance' => 'required|numeric',
            'ascent' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Store existing image if no new image is uploaded
        $imageName = $mountain->image;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
    
            // Move new image to the mountains directory
            $image->move(public_path('images/mountains'), $imageName);
    
            // Delete old image if it exists
            if ($mountain->image) {
                $oldImagePath = public_path('images/mountains/' . $mountain->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        }
    
        // Update mountain details
        $mountain->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'duration' => $request->duration,
            'distance' => $request->distance,
            'ascent' => $request->ascent,
            'image' => $imageName, // Keeps old image if not changed
        ]);
    
        return redirect()->route('expeditionsshow', $mountain->expedition_id)->with('success', 'mountain updated successfully.');
    }
    
    
    public function mountainsdestroy($id)
    {
        $mountain = mountain::findOrFail($id);
        if ($mountain->image) {
            unlink(public_path('images/mountains/' . $mountain->image));
        }
        $mountain->delete();

        return redirect()->route('expeditionsshow', $mountain->expedition_id)->with('success', 'mountain deleted successfully.');
    }

            public function mountainShow($mountain_id)
        {
        
            // $mountain = mountain::with('images')->findOrFail($mountain_id);
            // $itineraries = Itinerary::where('mountain_id', $mountain_id)->get();
            // $highlights = mountainHighlight::where('mountain_id', $mountain_id)->get();
            // $mountainFacts = mountainFact::where('mountain_id', $mountain_id)->get();
            // $mountainfaqs = mountainfaq::where('mountain_id', $mountain_id)->get();
            // return view('frontend.expeditions.mountains.show', compact('mountain', 'itineraries','highlights','mountainFacts','mountainfaqs'));
            return view('frontend.expeditions.mountain.show');
         

         
       
        }
}
