<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    // Display all job categories
    public function index()
    {
        $categories = JobCategory::all();
        return view('admin.job_categories.index', compact('categories'));
    }

    // Show the form to create a new job category
    public function create()
    {
        return view('admin.job_categories.create');
    }

    // Store a newly created job category in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        JobCategory::create(['name' => $request->name]);

        return redirect()->route('admin.job_categories.index')->with('success', 'Category created successfully.');
    }


    // Show the form for editing a job category
    public function edit($id)
    {
        $category = JobCategory::findOrFail($id);
        return view('admin.job_categories.edit', compact('category'));
    }

    // Update an existing job category
    public function update(Request $request, $id)
    {
        $category = JobCategory::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update($request->all());

        return redirect()->route('admin.job_categories.index')->with('success', 'Category updated successfully!');
    }

    // Delete a job category
    public function destroy($id)
    {
        $category = JobCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.job_categories.index')->with('success', 'Category deleted successfully!');
    }
}
