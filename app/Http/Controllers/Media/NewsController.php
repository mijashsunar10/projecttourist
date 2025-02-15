<?php

namespace App\Http\Controllers\Media;
use App\Models\News;
// use App\Http\Requests\UpdateNewsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller; // Import the base Controller
use Psy\VersionUpdater\Checker;


class NewsController extends Controller
{
    // public function index()
    // {
    //     $news = News::latest()->paginate(12);
    //     return view('frontend.media.news.index', ['news' => $news]);
    // }

    public function index()
    {
        // Fetch approved news articles
        $news = News::where('is_approved', true)->latest()->paginate(12);
    
        // Fetch the count of pending news articles
        $pendingNewsCount = News::where('is_approved', false)->count();
    
        return view('frontend.media.news.index', [
            'news' => $news,
            'pendingNewsCount' => $pendingNewsCount,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.media.news.addnews');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
    $news->is_approved = auth()->check() ? true : false; // Approved if logged in, otherwise false
    $news->author = auth()->check() ? auth()->user()->name : 'Guest';

    if ($request->image != "") {
        $image = $request->image;
        if ($image->getSize() > 2048 * 1024) {
            return redirect()->back()->with('error', 'Image size is too large. Max allowed is 2MB.');
        }
        $extension = $image->getClientOriginalExtension();
        $imageName = time() . '.' . $extension;
    }

    $slug = Str::slug($imageName . '-' . time());
    $news->slug = $slug;
    $news->image = $imageName;
    $news->save();

    $image->move(public_path('images/news'), $imageName);

    return redirect()->route('news')->with('success', 'News submitted successfully. It will be reviewed by an admin.');
    }
    public function edit($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        // echo "edit";
        // return view("frontend.media.media.addnews");
        return view('frontend.media.news.newsedit', ['news' => $news]);
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
    public function show($id, $slug)
    {
        // Fetch the current news article
        $news = News::where('id', $id)->where('slug', $slug)->firstOrFail();
    
        // Fetch 3 recent approved news articles, excluding the current one
        $recentNews = News::where('is_approved', true) // Only approved news
                          ->where('id', '!=', $news->id) // Exclude the current news
                          ->latest() // Order by latest
                          ->take(3) // Limit to 3 articles
                          ->get();
    
        return view('frontend.media.news.show', compact('news', 'recentNews'));
    }

    public function pendingNews()
{
    $pendingNews = News::where('is_approved', false)->get();
    return view('frontend.media.news.pending', ['pendingNews' => $pendingNews]);
}

public function approveNews($id)
{
    $news = News::findOrFail($id);
    $news->is_approved = true;
    $news->save();

    return redirect()->route('pending.news')->with('success', 'News approved successfully.');
}

public function deleteNews($id)
{
    $news = News::findOrFail($id);
    if ($news->image) {
        File::delete(public_path('images/news/' . $news->image));
    }
    $news->delete();

    return redirect()->route('pending.news')->with('success', 'News deleted successfully.');
}

}
