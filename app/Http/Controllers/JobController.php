<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use App\Models\JobCategory;

class JobController extends Controller
{
    public function index()
    {
        $jobs = JobListing::all();
        $categories = JobCategory::all();

        return view('jobs.index', compact('jobs', 'categories'));
    }


    public function show($id)
    {
        $job = JobListing::findOrFail($id);

        return view('jobs.show', compact('job'));
    }
}

