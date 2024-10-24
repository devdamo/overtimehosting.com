<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\JobApplication;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Add any data fetching logic here if needed, like passing counts or lists to the view.
        return view('dashboard');
    }

    public function dashboard()
    {
        // Get the counts for employees, news articles, and job applications
        $employeeCount = User::count();
        $newsArticleCount = News::count();
        $jobApplicationCount = JobApplication::count();

        // Pass the counts to the view
        return view('dashboard', compact('employeeCount', 'newsArticleCount', 'jobApplicationCount'));
    }

}
