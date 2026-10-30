<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    // Category List
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.category.index', compact('categories'));
    }

    // Create Form
    public function create()
    {
        return view('admin.category.create');
    }

    // Store Category
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'         => 'required|string|max:255',
            'slug'          => 'nullable|string|max:255|unique:categories,slug',
            'meta_title'    => 'nullable|string|max:255',
            'meta_desc'     => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        $slug = Str::slug($request->title);
        $validated['slug'] = $slug;

        $category = new Category();
        $category->fill($validated);
        $category->save();

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category created successfully.');
    }

    // Edit Form
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    // Update Category
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title'         => 'required|string|max:255',
            'slug'          => 'nullable|string|max:255|unique:categories,slug,' . $id,
            'meta_title'    => 'nullable|string|max:255',
            'meta_desc'     => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

       $slug = Str::slug($request->title);
        $validated['slug'] = $slug;

        $category = Category::findOrFail($id);
        $category->fill($validated);
        $category->save();

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category updated successfully.');
    }

    // Delete Category
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category deleted successfully.');
    }
}
