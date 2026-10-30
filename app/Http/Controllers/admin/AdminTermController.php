<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Term;

class AdminTermController extends Controller
{
    // Term List
    public function index()
    {
        $terms = Term::latest()->get();

        return view('admin.term.index', compact('terms'));
    }

    // Create Form
    public function create()
    {
        return view('admin.term.create');
    }

    // Store Term
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'description'   => 'required|string',
            'meta_title'    => 'nullable|string|max:255',
            'meta_desc'     => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        $term = new Term();
        $term->fill($validated);
        $term->save();

        return redirect()
            ->route('admin.term.index')
            ->with('success', 'Term created successfully.');
    }

    // Edit Form
    public function edit(string $id)
    {
        $term = Term::findOrFail($id);

        return view('admin.term.edit', compact('term'));
    }

    // Update Term
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'description'   => 'required|string',
            'meta_title'    => 'nullable|string|max:255',
            'meta_desc'     => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        $term = Term::findOrFail($id);

        $term->fill($validated);
        $term->save();

        return redirect()
            ->route('admin.term.index')
            ->with('success', 'Term updated successfully.');
    }

    // Delete Term
    public function destroy(string $id)
    {
        $term = Term::findOrFail($id);

        $term->delete();

        return redirect()
            ->route('admin.term.index')
            ->with('success', 'Term deleted successfully.');
    }
}
