<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Resume;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    //home page
    public function homePage()
    {
        $slider = Slider::active()->first();
        $about = About::first();
        return view('pages.home', compact('slider', 'about'));
    }

    //about page
    public function aboutPage()
    {
        $about = About::first();
        return view('pages.about', compact('about'));
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

    public function resumeDownload($file)
    {
        $resume = Resume::findOrFail($file);
        

        $filePath ='storage/'.$resume->resume;

        if(file_exists($filePath)){
            return response()->download($filePath);
        }
        else{
            abort(404);
        }

    }
}
