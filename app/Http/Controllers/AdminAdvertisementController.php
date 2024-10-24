<?php

// app/Http/Controllers/AdminAdvertisementController.php
namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdminAdvertisementController extends Controller
{
    public function index()
    {
        $ads = Advertisement::all();
        return view('admin.advertisements.index', compact('ads'));
    }

    public function create()
    {
        return view('admin.advertisements.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string',
            'title' => 'nullable|string',
            'subtitle' => 'nullable|string',
            'content' => 'nullable|string',
            'image_url' => 'nullable|url',
            'cta_text' => 'nullable|string',
            'cta_url' => 'nullable|url',
            'location' => 'nullable|string',
            'show_globally' => 'boolean',
        ]);

        Advertisement::create($validated);
        return redirect()->route('admin.advertisements.index')->with('success', 'Advertisement created successfully.');
    }

    public function edit(Advertisement $advertisement)
    {
        return view('admin.advertisements.edit', compact('advertisement'));
    }

    public function update(Request $request, Advertisement $advertisement)
    {
        $validated = $request->validate([
            'type' => 'required|string',
            'title' => 'nullable|string',
            'subtitle' => 'nullable|string',
            'content' => 'nullable|string',
            'image_url' => 'nullable|url',
            'cta_text' => 'nullable|string',
            'cta_url' => 'nullable|url',
            'location' => 'nullable|string',
            'show_globally' => 'boolean',
        ]);

        $advertisement->update($validated);
        return redirect()->route('admin.advertisements.index')->with('success', 'Advertisement updated successfully.');
    }

    public function destroy(Advertisement $advertisement)
    {
        $advertisement->delete();
        return redirect()->route('admin.advertisements.index')->with('success', 'Advertisement deleted successfully.');
    }
}
