<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Slider::all();
        return view('admin.slider.index',['sliders'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'nullable|string|max:255',
            'short_desc' => 'nullable|string|max:255',
        ]);

        if($request->hasFile('image')){
           $path = $request->file('image')->store('sliders','public' );
        }

        Slider::create([
            'image' => $path,
            'title' => $request->title,
            'short_desc' => $request->short_desc,
        ]);

        return redirect()->route('slider.index')->with('success', 'Slider created successfully.');
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
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'nullable|string|max:255',
            'short_desc' => 'nullable|string|max:255',
        ]);

        $slider = Slider::findOrFail($id);

        if($request->hasFile('image')){
              // Delete old image
              Storage::disk('public')->delete($slider->image);
              $path = $request->file('image')->store('sliders','public' );
              $slider->image = $path;
        }
        $slider->title = $request->title;
        $slider->short_desc = $request->short_desc;
        if($request->has('status')){
            $slider->status = $request->status;
        }
        $slider->save();

        return redirect()->route('slider.index')->with('success', 'Slider updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::findOrFail($id);
        Storage::disk('public')->delete($slider->image);
        $slider->delete();
        return redirect()->route('slider.index')->with('success', 'Slider deleted successfully.');
    }
}
