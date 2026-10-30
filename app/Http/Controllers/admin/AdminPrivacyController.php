<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Privacy;

class AdminPrivacyController extends Controller
{
    // Privacy List
    public function index()
    {
        $privacies = Privacy::latest()->get();

        return view('admin.privacy.index', compact('privacies'));
    }

    // Create Form
    public function create()
    {
        return view('admin.privacy.create');
    }

    // Store Privacy
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'description'   => 'required|string',
            'meta_title'    => 'nullable|string|max:255',
            'meta_desc'     => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        $privacy = new Privacy();
        $privacy->fill($validated);
        $privacy->save();

        return redirect()
            ->route('admin.privacy.index')
            ->with('success', 'Privacy created successfully.');
    }

    // Edit Form
    public function edit(string $id)
    {
        $privacy = Privacy::findOrFail($id);

        return view('admin.privacy.edit', compact('privacy'));
    }

    // Update Privacy
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'description'   => 'required|string',
            'meta_title'    => 'nullable|string|max:255',
            'meta_desc'     => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        $privacy = Privacy::findOrFail($id);

        $privacy->fill($validated);
        $privacy->save();

        return redirect()
            ->route('admin.privacy.index')
            ->with('success', 'Privacy updated successfully.');
    }

    // Delete Privacy
    public function destroy(string $id)
    {
        $privacy = Privacy::findOrFail($id);

        $privacy->delete();

        return redirect()
            ->route('admin.privacy.index')
            ->with('success', 'Privacy deleted successfully.');
    }
}
