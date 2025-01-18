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

    public function blog()
    {
        return view('frontend.media.blog');
    }
    public function news()
    {
        return view('frontend.media.news');
    }
    public function testimonials()
    {
        return view('frontend.media.testimonials');
    }
    public function faq()
    {
        return view('frontend.media.faq');
    }
}
