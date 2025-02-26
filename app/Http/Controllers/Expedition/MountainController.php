<?php

namespace App\Http\Controllers\Expedition;
use App\Http\Controllers\Controller;

use App\Models\Expedition;
use App\Models\ExpeditionFact;
use App\Models\Expeditionfaq;
use App\Models\ExpeditionHighlight;
use App\Models\ExpeditionItinerary;
use App\Models\ExpeditionReview;
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
       
        $customMessages = [
            'image.uploaded' => 'Image must be less than 2MB / Image must be of jpg, jpeg, png, gif or webp',
        ];
    
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required',
            'duration' => 'required',
            'distance' => 'required',
            'ascent' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ],$customMessages);

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
    
        $customMessages = [
            'image.uploaded' => 'Image must be less than 2MB / Image must be of jpg, jpeg, png, gif or webp',
        ];
    
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required',
            'duration' => 'required',
            'distance' => 'required',
            'ascent' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ],$customMessages);
    
    
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
        
            $mountain = mountain::with('images')->findOrFail($mountain_id);
            $itineraries = ExpeditionItinerary::where('mountain_id', $mountain_id)->get();
            $highlights = ExpeditionHighlight::where('mountain_id', $mountain_id)->get();
            $mountainFacts = ExpeditionFact::where('mountain_id', $mountain_id)->get();
            $mountainfaqs = Expeditionfaq::where('mountain_id', $mountain_id)->get();
            // return view('frontend.expeditions.mountains.show', compact('mountain', 'itineraries','highlights','mountainFacts','mountainfaqs'));
            $mountainreviews = ExpeditionReview::where('mountain_id', $mountain_id)
            ->latest()  // Get the latest reviews
            ->take(3)   // Limit to 3 reviews
            ->get();
            $entity_type = 'mountain';
            return view('frontend.expeditions.mountain.show',compact('mountain','mountainFacts','highlights','itineraries','mountainfaqs','mountainreviews','mountain_id','entity_type'));
         

         
       
        }
}
