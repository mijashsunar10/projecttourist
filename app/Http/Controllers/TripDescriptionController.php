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
    // Validate: maximum 5 images, each image must be of valid type and size
    $request->validate([
        'images' => 'required|array|max:5',  // Limit to 5 images
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image types and size
    ], [
        'images.max' => 'You can upload a maximum of 5 images.', // Custom message for exceeding image limit
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
    // Validate the incoming request
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Find the existing image record
    $tripImage = TripImage::findOrFail($image_id);

    // Delete the old image if it exists
    $oldImagePath = public_path('images/trips/' . $tripImage->image);
    if (file_exists($oldImagePath)) {
        unlink($oldImagePath);
    }

    // Upload the new image
    $image = $request->file('image');
    $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('images/trips'), $imageName);

    // Update the image record in the database
    $tripImage->update(['image' => $imageName]);

    // Redirect back to the trip show page with success message
    return redirect()->route('tripshow', $tripImage->trip_id)
                     ->with('success', 'Image updated successfully.');
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
