<?php
namespace App\Http\Controllers\Tours;
use App\Http\Controllers\Controller;

use App\Models\TourImage;
use App\Models\Tourtrips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TourImageController extends Controller
{
    public function addImages(Request $request, $tourtrip_id)
    {
        $customMessages = [
            'images.required'    => 'Please select at least one image.',
           
         
            'images.*.uploaded'  => 'Image must be less than 2MB / Image must be of jpg, jpeg, png, gif or webp',
        ];
        $request->validate([
            'images'   => 'required|array|max:5',  // Limit to 5 images
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Validate image types and size
        ], $customMessages);
        // $tourtrip = Tourtrips::findOrFail($to);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('images/tourtrips'), $imageName);

                TourImage::create([
                    'tourtrip_id' => $tourtrip_id,
                    'image' => $imageName,
                ]);
            }
        }

        return redirect()->route('tourtripshow', $tourtrip_id)->with('success', 'Images uploaded successfully.');
    }


    public function deleteImage($image_id)
    {
        $tourImage = TourImage::findOrFail($image_id);
        if ($tourImage->image) {
            File::delete(public_path('images/tourtrips/' . $tourImage->image));
        }
        $tourImage->delete();

        return redirect()->route('tourtripshow', $tourImage->tourtrip_id)->with('success', 'Image deleted successfully.');
    }
}
