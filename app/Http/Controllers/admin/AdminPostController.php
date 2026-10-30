<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminPostController extends Controller
{
    // Post List
    public function index()
    {
        $posts = Post::with('category')->latest()->get();

        return view('admin.post.index', compact('posts'));
    }

    // Create Form
    public function create()
    {
        $categories = Category::latest()->get();

        return view('admin.post.create', compact('categories'));
    }

    // Store Post
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:posts,slug',
            'img' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'meta_title' => 'nullable|string|max:255',
            'meta_desc' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        $slug = Str::slug($request->title);
        $validated['slug'] = $slug;

       

        // Image Upload
        if ($request->hasFile('img')) {
            $validated['img'] = $request->file('img')
                ->store('posts', 'public');
        }

        Post::create($validated);

        return redirect()
            ->route('admin.post.index')
            ->with('success', 'Post created successfully.');
    }

    // Edit Form
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::latest()->get();

        return view('admin.post.edit', compact('post', 'categories'));
    }

    // Update Post
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'img' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'meta_title' => 'nullable|string|max:255',
            'meta_desc' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        $slug = Str::slug($request->title);
        $validated['slug'] = $slug;


        // Image Upload
        if ($request->hasFile('img')) {

            // Delete old image
            if ($post->img) {
                Storage::disk('public')->delete($post->img);
            }

            // Store new image
            $validated['img'] = $request->file('img')
                ->store('posts', 'public');
        }

        $post->fill($validated);
        $post->save();

        return redirect()
            ->route('admin.post.index')
            ->with('success', 'Post updated successfully.');
    }

    // Delete Post
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);

        // Delete image
        if ($post->img) {
            Storage::disk('public')->delete($post->img);
        }

        $post->delete();

        return redirect()
            ->route('admin.post.index')
            ->with('success', 'Post deleted successfully.');
    }
}
