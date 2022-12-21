<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('moderator.brand', [
            'brands' => Brand::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'image' => 'required|image',
            'title' => 'required|string'
        ]);

        $attributes['image'] = request()->file('image')->store('image');

        $brand = Brand::create(['title' => $attributes['title']]);
        $brand->image()->create(['path' => $attributes['image']]);
        return redirect('/brand')->with('status', 'Brand created.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $attributes = $request->validate([
            'title' => 'required_if:image,null|string|nullable',
            'image' => 'required_if:title,null|image|nullable'
        ]);

        if (($attributes['title']) ?? false)
            $brand->update(['title' => $attributes['title']]);

        if ($attributes['image'] ?? false) {
            $image = $this->storeImage('image');
            $brand->image->update(['path' => $image]);
        }

        return back()->with('status', 'Brand Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();

        return back()->with('status', 'Brand Deleted!');
    }

    protected function storeImage($imageInputName)
    {
        return request()->file($imageInputName)->store($imageInputName);
    }
}
