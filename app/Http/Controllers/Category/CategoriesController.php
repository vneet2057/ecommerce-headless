<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.products.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input
        $validatedData = $request->validate([
            'category_name' => 'required|string|max:255',
            'category_code' => 'required|string|max:255|unique:categories,category_code',
            'primary_category_id' => 'nullable|integer',
            'category_icon' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048',
            'category_description' => 'nullable|string',
        ]);

        // Create new category
        $category = new Category();
        $category->category_name = $validatedData['category_name'];
        $category->category_code = $validatedData['category_code'];
        $category->primary_category_id = $validatedData['primary_category_id'];
        $category->description = $validatedData['category_description'];

        // Save category icon if provided
        if ($request->hasFile('category_icon')) {
            $categoryIcon = $request->file('category_icon');
            $filename = time() . '.' . $categoryIcon->getClientOriginalExtension();
            $categoryIcon->storeAs('public/category_icons', $filename);
            $category->category_icon = $filename;
        }

        $category->save();

        return redirect()->back()->with('success', 'Category created successfully.');
    }

    /**
     * Change the status of the category
     */
    public function changeStatus(string $id)
    {
        $category = Category::find($id);
        if ($category->status == 'Active') {
            $category->status = 'Disabled';
            $category->update();
        } else {
            $category->status = 'Active';
            $category->update();
        }

        return back()->with('success', 'Category status has been updated');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('admin.products.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return back()->with('success', 'Category Deleted Successfully');
    }
}
