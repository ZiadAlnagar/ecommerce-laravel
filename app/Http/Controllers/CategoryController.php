<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('moderator.category', [
            'categories' => Category::orderBy('parent_id', 'asc')->get()
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
        Category::create($request->validate([
            'title' => 'required|string',
            'parent_id' => 'exists:categories,id|nullable'
        ]));

        return redirect('/category')->with('status', 'Category Created!.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $attributes = $request->validate([
            'title' => 'required_if:parent,null|string|nullable',
            'parent' => 'required_if:title,null|exists:categories,id|nullable'
        ]);

        if (($attributes['title']) ?? false)
            $category->update(['title' => $attributes['title']]);

        if ($attributes['parent'] ?? false) {
            $category->update(['parent_id' => $attributes['parent']]);
        }

        return back()->with('status', 'Category Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('status', 'Category Deleted!');
    }
}
