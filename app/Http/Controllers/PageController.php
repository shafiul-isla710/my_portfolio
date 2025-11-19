<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //home page
    public function homePage()
    {
        return view('pages.home');
    }

    //about page
    public function aboutPage()
    {
        return view('pages.about');
    }
    //service page
    public function servicePage()
    {
        return view('pages.service');
    }

    //resume page
    public function resumePage()
    {
        return view('pages.resume');
    }
    //contact page
    public function contactPage()
    {
        return view('pages.contact');
    }
}
