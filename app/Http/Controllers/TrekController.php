<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrekController extends Controller
{
    public function index()
    {
        return view('frontend.home.homepage');
    }
    public function contact()
    {
        return view('frontend.contact.contact');
    }
}
