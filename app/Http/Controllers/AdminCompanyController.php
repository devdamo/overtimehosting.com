<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('admin.companies.index', compact('companies'));
    }

    public function create()
    {
        return view('admin.companies.create');
    }

    public function edit(Company $company)
    {
        return view('admin.companies.edit', compact('company'));
    }

    // Controller Store Method
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'services' => 'required|string',
            'main_activities' => 'required|string',
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $data['logo'] = $logoPath;
        }

        // Convert services and main activities to arrays
        $data['services'] = explode(',', $data['services']);
        $data['main_activities'] = explode(',', $data['main_activities']);

        Company::create($data);

        return redirect()->route('companies.index')->with('success', 'Company created successfully!');
    }

// Controller Update Method
    public function update(Request $request, Company $company)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'services' => 'required|string',
            'main_activities' => 'required|string',
        ]);

        // Handle logo upload if provided
        if ($request->hasFile('logo')) {
            if ($company->logo && Storage::disk('public')->exists($company->logo)) {
                Storage::disk('public')->delete($company->logo);
            }
            $logoPath = $request->file('logo')->store('logos', 'public');
            $data['logo'] = $logoPath;
        }

        // Convert services and main activities to arrays
        $data['services'] = explode(',', $data['services']);
        $data['main_activities'] = explode(',', $data['main_activities']);

        $company->update($data);

        return redirect()->route('companies.index')->with('success', 'Company updated successfully!');
    }



    public function destroy(Company $company)
    {
        // Delete the logo from storage
        if ($company->logo && Storage::disk('public')->exists($company->logo)) {
            Storage::disk('public')->delete($company->logo);
        }

        $company->delete();
        return redirect()->route('companies.index');
    }
}

