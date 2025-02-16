<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class AdminController extends Controller
{
    public function dashboard()
    {
        $unreadCount = Contact::where('is_read', false)->count();
        return view('admin.dashboard', compact('unreadCount'));
    }
}
