<?php

namespace App\Http\Controllers;

use App\Models\LegalPage;
use Illuminate\Http\Request;

class AdminLegalPageController extends Controller
{
    // Display a listing of the legal pages
    public function index()
    {
        $pages = LegalPage::orderBy('effective_date', 'desc')->get();
        return view('admin.legal.index', compact('pages'));
    }

    // Show the form for creating a new legal page
    public function create()
    {
        return view('admin.legal.create');
    }

    // Store a newly created legal page in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:Terms and Conditions,Privacy Policy,Cookies Notice',
            'content' => 'required|string',
            'effective_date' => 'required|date',
        ]);

        // Create the LegalPage using the validated data
        LegalPage::create($validated);

        return redirect()->route('admin.legal.index')->with('success', 'Legal page created successfully.');
    }


    // Show the form for editing the specified legal page
    public function edit($id)
    {
        $page = LegalPage::findOrFail($id);
        return view('admin.legal.edit', compact('page'));
    }

    // Update the specified legal page in the database
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'type' => 'required|in:Terms and Conditions,Privacy Policy,Cookies Notice',
            'content' => 'required|string', // Ensure content is present and not empty
            'effective_date' => 'required|date',
        ]);

        // Find the legal page
        $page = LegalPage::findOrFail($id);

        // Update the legal page with the validated data
        $page->update([
            'title' => $validated['title'],
            'type' => $validated['type'],
            'content' => $validated['content'], // Make sure this field is not null
            'effective_date' => $validated['effective_date'],
        ]);

        // Redirect back to the index with a success message
        return redirect()->route('admin.legal.index')->with('success', 'Legal page updated successfully.');
    }

    // Remove the specified legal page from the database
    public function destroy($id)
    {
        $page = LegalPage::findOrFail($id);
        $page->delete();

        return redirect()->route('admin.legal.index')->with('success', 'Legal page deleted successfully.');
    }
}
