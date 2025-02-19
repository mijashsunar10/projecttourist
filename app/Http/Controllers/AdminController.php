<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\News;

class AdminController extends Controller
{
    public function dashboard()
    {
        $pendingNewsCount = News::where('is_approved', false)->count();
        $pendingBlogsCount = Blog::where('is_approved', false)->count();
        $unreadCount = Contact::where('is_read', false)->count();
        return view('admin.dashboard', compact('unreadCount','pendingNewsCount','pendingBlogsCount'));
    }
}