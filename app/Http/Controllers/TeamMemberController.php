<?php

// app/Http/Controllers/TeamMemberController.php
namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    // Display all team members for the public
    public function index()
    {
        $teamMembers = TeamMember::all();
        return view('team.index', compact('teamMembers'));
    }

    // Show a single team member based on slug
    public function show($slug)
    {
        $teamMember = TeamMember::where('slug', $slug)->firstOrFail();
        return view('team.show', compact('teamMember'));
    }

    // Display the dashboard page to list team members (admin view)
    public function manage()
    {
        $teamMembers = TeamMember::all();
        return view('admin.team.index', compact('teamMembers'));
    }

    // Show the form for creating a new team member
    public function create()
    {
        return view('admin.team.create');
    }

    // Store the new team member in the database
    public function store(Request $request)
    {
        $data = $request->validate([
            'slug' => 'required|unique:team_members,slug|max:255',
            'username' => 'required|unique:team_members,username|max:255',
            'display_name' => 'required|max:255',
            'company_role' => 'required|max:255',
            'logo' => 'nullable|image|max:1024', // Optional logo
            'about_me' => 'required',
            'links' => 'nullable|array', // Links stored as an array
        ]);

        // Handle logo upload if provided
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('team_logos', 'public');
        }

        // Store the team member data
        TeamMember::create($data);

        return redirect()->route('admin.team.index')->with('success', 'Team member added successfully.');
    }

    // Show the form for editing a team member
    public function edit(TeamMember $teamMember)
    {
        return view('admin.team.edit', compact('teamMember'));
    }

    // Update a team member
    public function update(Request $request, TeamMember $teamMember)
    {
        $data = $request->validate([
            'slug' => 'required|unique:team_members,slug,' . $teamMember->id,
            'username' => 'required|unique:team_members,username,' . $teamMember->id,
            'display_name' => 'required|max:255',
            'company_role' => 'required|max:255',
            'logo' => 'nullable|image|max:1024',
            'about_me' => 'required',
            'links' => 'nullable|array',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('team_logos', 'public');
        }

        $teamMember->update($data);

        return redirect()->route('admin.team.index')->with('success', 'Team member updated successfully.');
    }

    // Delete a team member
    public function destroy(TeamMember $teamMember)
    {
        $teamMember->delete();
        return redirect()->route('admin.team.index')->with('success', 'Team member deleted successfully.');
    }
}
