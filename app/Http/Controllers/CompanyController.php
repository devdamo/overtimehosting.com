<?php

namespace App\Http\Controllers;

use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        // Fetch all companies
        $companies = Company::all();

        // Return the view and pass the companies to it
        return view('projects.index', compact('companies'));
    }
}
