<?php

namespace App\Http\Controllers\Expedition;
use App\Http\Controllers\Controller;

use App\Models\ExpeditionImage;
use Illuminate\Http\Request;

class ExpeditionImageController extends Controller
{
    public function addImages(Request $request, $mountain_id)
    {
        // Validate: maximum 5 images, each image must be of valid type and size
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
                $image->move(public_path('images/mountains'), $imageName);
    
                ExpeditionImage::create([
                    'mountain_id' => $mountain_id,
                    'image' => $imageName,
                ]);
            }
        }
    
        return redirect()->route('mountainshow', $mountain_id)->with('success', 'Images added successfully.');
    }
    
    
   
    
            public function deleteImage($image_id)
        {
            $mountainImage = ExpeditionImage::findOrFail($image_id);
    
            // Delete the image file from storage
            if (file_exists(public_path('images/mountains/' . $mountainImage->image))) {
                unlink(public_path('images/mountains/' . $mountainImage->image));
            }
    
            // Delete the record from the database
            $mountainImage->delete();

            
            return redirect()->route('mountainshow', $mountainImage->mountain_id)->with('success', 'Image deleted successfully.');
        }
    
}
