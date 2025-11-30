<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\AboutStoreRequest;
use App\Http\Requests\Admin\AboutUpdateRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index',['abouts'=>$abouts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutStoreRequest $request)
    {
        try{
            $data = $request->validated();

            if($request->hasFile('image')){
                $path = $request->file('image')->store('about','public');
                $data['image'] = $path;
            }
            
            About::create($data);

            return redirect()->route('about.index')->with('success', 'About created successfully.');
        }
        catch(\Exception $e){
            Log::error('About Store Error' . $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $about = About::findOrFail($id);
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutUpdateRequest $request, string $id)
    {
        try{
            $data = $request->validated();
            
            $about = About::findOrFail($id);
            if($request->hasFile('image')){
                
                Storage::disk('public')->delete($about->image);

                $path = $request->file('image')->store('about','public');
                $data['image'] = $path;
            }
            
            $about->update($data);

            return redirect()->route('about.index')->with('success', 'About updated successfully.');
        }
        catch(\Exception $e){
            Log::error('About Store Error' . $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $about = About::findOrFail($id);

            if($about->image){
                Storage::disk('public')->delete($about->image);
            }

            $about->delete();
            return redirect()->route('about.index')->with('success', 'About deleted successfully.');
        }
        catch(\Exception $e){
            Log::error('About Store Error' . $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
