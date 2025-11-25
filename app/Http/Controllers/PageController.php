<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //home page
    public function homePage()
    {
        $slider = Slider::active()->first();
        return view('pages.home', compact('slider'));
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
