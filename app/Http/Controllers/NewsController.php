<?php

namespace App\Http\Controllers;
use App\Models\News;
// use App\Http\Requests\UpdateNewsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;



class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(12);
        return view('frontend.news.index', ['news' => $news]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.news.addnews');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;
        if ($request->image != "") {
            $image = $request->image;
            if ($image->getSize() > 2048 * 1024) {  // Convert KB to Bytes
                return redirect()->back()->with('error', 'Image size is too large. Max allowed is 2MB.');
            }
            $extension = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;
        };
        $slug = Str::slug($imageName . '-' . time());
        $news->slug = $slug;
        $news->image = $imageName;
        $news->save();
        $image->move(public_path('images/news'), $imageName);
        return redirect()->route('news')->with('success', 'News added successfully');
    }
    public function edit($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        // echo "edit";
        // return view("frontend.media.addnews");
        return view('frontend.news.newsedit', ['news' => $news]);
    }

    public function update($slug, Request $request)
    {
        // Find the news by slug
        $news = News::where('slug', $slug)->firstOrFail();
        // Define validation rules
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // Update fields
        $news->title = $request->title;
        $news->description = $request->description;
        // Check if new image is uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            File::delete(public_path('images/news/' . $news->image));
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Move the uploaded image to the desired location
            $image->move(public_path('images/news'), $imageName);
            // Update image name in the database
            $news->image = $imageName;
        }
        // Save the updated news details
        $news->save();
        return redirect()->route('news')->with('success', 'News updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        // Delete image if it exists
        if ($news->image) {
            File::delete(public_path('images/news/' . $news->image));
        }
        $news->delete();
        return redirect()->route('news')->with('success', 'News deleted successfully');
    }

}
