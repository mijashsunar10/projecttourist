<?php
namespace App\Http\Controllers;

use App\Models\TourImage;
use App\Models\Tourtrips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TourImageController extends Controller
{
    public function addImages(Request $request, $tourtrip_id)
    {
        $request->validate([
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

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

    public function updateImage(Request $request, $image_id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        $tourImage = TourImage::findOrFail($image_id);
    
        // Check if a new file was uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            $oldImagePath = public_path('images/tourtrips/' . $tourImage->image);
            if (file_exists($oldImagePath) && !is_dir($oldImagePath)) {
                unlink($oldImagePath);
            }
    
            // Upload the new image
            $image = $request->file('image');
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/tourtrips'), $imageName);
    
            // Update the image record
            $tourImage->update(['image' => $imageName]);
        }
    
        return redirect()->route('tourtripshow', $tourImage->tourtrip_id)->with('success', 'Image updated successfully.');
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
