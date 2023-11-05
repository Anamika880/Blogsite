<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        \Auth::user()->assignRole('Admin', 'Author', 'Reader');
        $categories = Category::all();
        return view('backend.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'category_name',        
        ]);
        Category::create(['category_name' => $request->category_name,]);
        return redirect()->route('category.index')->with("success", "Category Created Sucessfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::where('id', $id)->first();
        return view('backend.category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_name' => 'required',
        ]);
        Category::where('id', $id)->update([
            'category_name' => $request->category_name,
        ]);
        return redirect()->route('category.index')->with("success", "Category Updated Sucessfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $category = Category::where('id', $id)->first();
        $category->delete();
        return redirect()->back()->with("error", "Category Deleted Sucessfully");
    }
}
