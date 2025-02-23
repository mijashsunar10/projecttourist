<?php

namespace App\Http\Controllers\Trekking;
use App\Http\Controllers\Controller;
use App\Models\region;
use App\Models\Trip;
use App\Models\TripImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TripDescriptionController extends Controller
{
    
    public function addImages(Request $request, $trip_id)
{ 
    $customMessages = [
        'images.required'    => 'Please select at least one image.',
       
     
        'images.*.uploaded'  => 'Image must be less than 2MB / Image must be of jpg, jpeg, png, gif or webp',
    ];

    // Validate: maximum 5 images, each image must be of valid type and size
    $request->validate([
        'images'   => 'required|array|max:5',  // Limit to 5 images
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Validate image types and size
    ], $customMessages);

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/trips'), $imageName);

            TripImage::create([
                'trip_id' => $trip_id,
                'image'   => $imageName,
            ]);
        }
    }

    return redirect()->route('tripshow', $trip_id)->with('success', 'Images added successfully.');
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
