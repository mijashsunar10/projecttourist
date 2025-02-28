<?php

namespace App\Http\Controllers;

use App\Models\Payimage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class PayimageController extends Controller
{


    public function store(Request $request)
    {
        // Proper validation using Validator::make
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'image.max' => 'The uploaded image should be less than 2MB!',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Image Upload Handling
        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/payimages'), $imageName);
        }
    
        // Generate Unique Slug
        $slug = Str::slug($request->title) . '-' . Str::uuid();
    
        // Create Payimage record
        Payimage::create([
            'image' => $imageName,
            'slug' => $slug,
        ]);
    
        return redirect()->route('payment')->with('success', 'Image uploaded successfully!');
    }

    public function destroy($id)
    {
        // Delete the image from the server
        $image = Payimage::find($id);
        $imagePath = public_path('images/payimages/' . $image->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    
        // Delete the record from the database
        $image->delete();
    
        return redirect()->route('payment')->with('success', 'Image deleted successfully!');
    }
}
