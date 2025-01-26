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

        public function updateImage(Request $request, $image_id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $tripImage = TripImage::findOrFail($image_id);

        // Delete the old image
        if (file_exists(public_path('images/trips/' . $tripImage->image))) {
            unlink(public_path('images/trips/' . $tripImage->image));
        }

        // Upload the new image
        $image = $request->file('image');
        $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/trips'), $imageName);

        // Update the image record
        $tripImage->update(['image' => $imageName]);

        return redirect()->route('tripshow', $tripImage->trip_id)->with('success', 'Image updated successfully.');
    }

        public function deleteImage($image_id)
    {
        $tripImage = TripImage::findOrFail($image_id);

        // Delete the image file from storage
        if (file_exists(public_path('images/trips/' . $tripImage->image))) {
            unlink(public_path('images/trips/' . $tripImage->image));
        }

        // Delete the record from the database
        $tripImage->delete();

        return redirect()->route('tripshow', $tripImage->trip_id)->with('success', 'Image deleted successfully.');
    }

}
