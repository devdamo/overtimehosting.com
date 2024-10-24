<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{
    public function showApplicationForm($id)
    {
        $jobListing = JobListing::findOrFail($id); // Assuming JobListing is the model for jobs
        return view('jobs.apply', compact('jobListing')); // Pass the correct variable to the view
    }


    public function show($id)
    {
        $application = JobApplication::with('jobListing')->findOrFail($id);
        return view('admin.jobs.application-details', compact('application'));
    }

    public function showApplications()
    {
        $applications = JobApplication::with('jobListing')->get();
        return view('admin.jobs.applications', compact('applications'));
    }


    public function store(Request $request, $id)
    {
        $jobListing = JobListing::findOrFail($id); // This should retrieve the job listing

        if (!$jobListing) {
            return redirect()->back()->with('error', 'Job listing not found.');
        }


        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'location_city' => 'required|string|max:255',
            'location_country' => 'required|string|max:255',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:2048000',
            'portfolio_url' => 'nullable|url',
            'additional_info' => 'nullable|string',
            'linkedin_profile' => 'nullable|url',
            'referral_source' => 'nullable|string',
            'work_authorization_uk' => 'required|in:yes,no',
            'located_in_uk' => 'required|in:yes,no',
            'education' => 'nullable|array',
            'education.*.school' => 'required_with:education|string',
            'education.*.degree' => 'required_with:education|string',
            'education.*.discipline' => 'required_with:education|string',
        ]);

        $cvPath = $request->file('cv') ? $request->file('cv')->store('cvs', 'public') : null;

        JobApplication::create([
            'job_listing_id' => $jobListing->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'location_city' => $request->location_city,
            'location_country' => $request->location_country,
            'cv_path' => $cvPath,
            'portfolio_url' => $request->portfolio_url,
            'additional_info' => $request->additional_info,
            'linkedin_profile' => $request->linkedin_profile,
            'referral_source' => $request->referral_source,
            'work_authorization_uk' => $request->work_authorization_uk,
            'located_in_uk' => $request->located_in_uk,
            'education' => $request->education,
        ]);

        return redirect()->back()->with('success', 'Your application has been submitted successfully!');
    }
}
