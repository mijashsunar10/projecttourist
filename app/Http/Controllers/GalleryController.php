<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the gallery items.
     */
    public function index()
    {
        $photos = Gallery::where('type', 'photo')->orderBy('date', 'desc')->get();
        $videos = Gallery::where('type', 'video')->orderBy('date', 'desc')->get();

        return view('frontend.media.gallery.index', compact('photos', 'videos'));
    }

    /**
     * Show the form for creating a new gallery item.
     */
    public function create()
    {
        return view('frontend.media.gallery.create');
    }

    /**
     * Store a newly created gallery item in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:photo,video',
            'file' => 'required|file|mimes:jpeg,png,jpg,heic,mp4,mov|max:100048000', // 20MB
        ]);

        $file = $request->file('file');
        $path = $file->store('uploads/gallery', 'public');

        Gallery::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-') . '-' . time(),
            'type' => $request->type,
            'views' => 0,
            'date' => now(),
            'file_path' => $path,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Media added successfully!');
    }

    /**
     * Show the form for editing the specified gallery item.
     */
    public function edit(Gallery $gallery)
    {
        return view('frontend.media.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified gallery item in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:photo,video',
            'file' => 'nullable|file|mimes:jpeg,png,heic,jpg,mp4,mov|max:100048000', // Optional file upload
        ]);

        $data = [
            'title' => $request->title,
            'type' => $request->type,
        ];

        if ($request->hasFile('file')) {
            // Delete old file
            Storage::disk('public')->delete($gallery->file_path);

            // Upload new file
            $file = $request->file('file');
            $path = $file->store('uploads/gallery', 'public');
            $data['file_path'] = $path;
        }

        $gallery->update($data);

        return redirect()->route('gallery.index')->with('success', 'Media updated successfully!');
    }

    /**
     * Remove the specified gallery item from storage.
     */
    public function destroy(Gallery $gallery)
    {
        // Delete the file from storage
        Storage::disk('public')->delete($gallery->file_path);

        // Delete the database record
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Media deleted successfully!');
    }
}
