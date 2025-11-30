<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Resume;

class ResumeController extends Controller
{
    public function resumeUploadPage()
    {
        return view('admin.resume.upload');
    }

    public function resumeUpload(Request $request)
    {
       try{
            $request->validate([
                'resume' => 'required|mimes:pdf',
            ]);
            
            $path = $request->file('resume')->store('resumes','public');
            // dd($path);

            Resume::create([
                'resume' => $path,
            ]);
            return redirect()->back()->with('success', 'Resume uploaded successfully');
       }
       catch(\Exception $e){
            Log::error('Resume Upload Error' . $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
       }
        
        
    }
}
