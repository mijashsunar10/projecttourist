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

    public function region()
    {
        return view('frontend.trekking.region');
    }

    public function trekinfo()
    {
        return view('frontend.trekking.trekinfo');
    }
    public function trekmain()
    {
        return view('frontend.trekking.main');
    }
    public function trekmain1()
    {
        return view('frontend.trekking.main1');
    }
    public function customize()
    {
        return view('frontend.customize.customize');
    }
    public function gallery()
    {
        return view('frontend.media.gallery');
    }
    public function terms()
    {
        return view('frontend.company.terms');
    }
    public function aboutus()
    {
        return view('frontend.company.aboutus');
    }
    public function payment()
    {
        return view('frontend.company.payment');
    }
    public function documents()
    {
        return view('frontend.company.documents');
    }
    public function ourteam()
    {
        return view('frontend.company.ourteam');
    }
}
