<?php

namespace App\Http\Controllers\Media;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
 // Import the base Controller


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch approved blogs
        $blogs = Blog::where('is_approved', true)->orderBy('created_at', 'desc')->take(9)->get();

        // Fetch the count of pending blogs
        $pendingBlogsCount = Blog::where('is_approved', false)->count();

        return view('frontend.media.blogs.index', compact('blogs', 'pendingBlogsCount'));
    }

    /**
     * Show the form for creating a new resource.
     */


    public function create()
    {
        return view('frontend.media.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customMessages = [
            'image.uploaded' => 'Image must be less than 2MB / Image must be of jpg, jpeg, png, gif or webp',
        ];

        $rules = [
            'title' => 'required|min:3|max:255|string',
            'author' => 'required|string|max:100',
             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'description' => 'required|string|min:10|max:1000',
            'content' => 'required|string|min:10',
        ];

        $validator = Validator::make($request->all(), $rules, $customMessages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->description = $request->description;
        $blog->content = $request->content;
        $blog->slug = Str::slug($request->title);

        // Set is_approved based on user role
        $blog->is_approved = auth()->check() && auth()->user()->is_admin ? true : false;

        if ($request->hasFile('image')) {
            if ($request->file('image')->getSize() > 2048000) {  // 2MB limit
                return back()->withErrors(['image' => 'Image size should not exceed 2MB.']);
            }
            $image = $request->image;
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $blog->image = $image_name;

            $image->move(public_path('uploads/blogs/images'), $image_name);
        }

        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog submitted successfully. It will be reviewed by an admin.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id, $slug)
    {
        $blog = Blog::findOrFail($id);
        $recentBlogs = Blog::where('is_approved', true)
                           ->where('id', '!=', $blog->id)
                           ->latest()
                           ->take(3)
                           ->get();

        return view('frontend.media.blogs.show', compact('blog', 'recentBlogs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        // dd(   $blog);
        return view('frontend.media.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
      
        $blog=Blog::findOrFail($id);

        
        $customMessages = [
            'image.uploaded' => 'Image must be less than 2MB / Image must be of jpg, jpeg, png, gif or webp',
        ];


        $rules = [
            'title' => 'required|min:3|max:255|string',
            'author' => 'required|string|max:100',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string|min:10|max:1000',
            'content' => 'required|string|min:10',
        ];

        $validator = Validator::make($request->all(), $rules, $customMessages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->description = $request->description;
        $blog->content = $request->content;

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            File::delete(public_path('uploads/news/' . $blog->image));
            
            if ($request->file('image')->getSize() > 2048000) {  // 2MB limit
                return back()->withErrors(['image' => 'Image size should not exceed 2MB.']);
            }
            $image = $request->image;
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $blog->image = $image_name;

            $image->move(public_path('uploads/blogs/images'), $image_name);
        }
        $blog->save();
        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $blog = Blog::findOrFail($id);
    
            // Check if the image exists before deleting
            $imagePath = public_path('uploads/blogs/images/' . $blog->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
    
            $blog->delete();
            return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('blogs.index')->with('error', 'Error deleting blog: ' . $e->getMessage());
        }
    }

    public function pendingBlogs()
    {
        $pendingBlogs = Blog::where('is_approved', false)->get();
        return view('frontend.media.blogs.pending', compact('pendingBlogs'));
    }

    public function approveBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->is_approved = true;
        $blog->save();

        return redirect()->route('blogs.pending')->with('success', 'Blog approved successfully.');
    }

    public function deletePendingBlog($id)
    {
        $blog = Blog::findOrFail($id);

        // Delete the image if it exists
        if ($blog->image) {
            File::delete(public_path('uploads/blogs/images/' . $blog->image));
        }

        $blog->delete();

        return redirect()->route('blogs.pending')->with('success', 'Blog deleted successfully.');
    }
}