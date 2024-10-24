<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobListing;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobAdminController extends Controller
{
    // Display all job listings
    public function index()
    {
        $jobs = JobListing::all();
        return view('admin.jobs.index', compact('jobs'));
    }

    // Show form to create a new job listing
    public function create()
    {
        $categories = JobCategory::all();
        return view('admin.jobs.create', compact('categories'));
    }

    // Store a new job listing
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:job_categories,id',
            'title' => 'required|string|max:255',
            'image_path' => 'nullable|image',
            'short_description' => 'required|string|max:255',
            'full_description' => 'required|string',
            'job_type' => 'required|string',
            'pay' => 'nullable|numeric',
            'additional_pay' => 'nullable|string',
            'benefits' => 'nullable|string',
            'schedule' => 'nullable|string',
            'work_location' => 'nullable|string',
        ]);

        $job = new JobListing($request->all());

        if ($request->hasFile('image_path')) {
            $job->image_path = $request->file('image_path')->store('job_images', 'public');
        }

        $job->save();

        return redirect()->route('admin.jobs.index')->with('success', 'Job listing created successfully.');
    }

    // Show form to edit an existing job listing
    public function edit($id)
    {
        $job = JobListing::findOrFail($id);
        $categories = JobCategory::all();
        return view('admin.jobs.edit', compact('job', 'categories'));
    }

    // Update an existing job listing
    public function update(Request $request, $id)
    {
        $job = JobListing::findOrFail($id);

        $request->validate([
            'category_id' => 'required|exists:job_categories,id',
            'title' => 'required|string|max:255',
            'image_path' => 'nullable|image',
            'short_description' => 'required|string|max:255',
            'full_description' => 'required|string',
            'job_type' => 'required|string',
            'pay' => 'nullable|numeric',
            'additional_pay' => 'nullable|string',
            'benefits' => 'nullable|string',
            'schedule' => 'nullable|string',
            'work_location' => 'nullable|string',
        ]);

        $job->fill($request->all());

        if ($request->hasFile('image_path')) {
            $job->image_path = $request->file('image_path')->store('job_images', 'public');
        }

        $job->save();

        return redirect()->route('admin.jobs.index')->with('success', 'Job listing updated successfully.');
    }

    // Delete an existing job listing
    public function destroy($id)
    {
        $job = JobListing::findOrFail($id);
        $job->delete();

        return redirect()->route('admin.jobs.index')->with('success', 'Job listing deleted successfully.');
    }
}
