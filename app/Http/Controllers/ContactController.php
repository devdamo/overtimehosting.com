<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getContactsForDashboard()
    {
        // Fetch all contact messages
        $contacts = Contact::all();

        // Return the contacts to the dashboard view
        return view('dashboard', compact('contacts'));
    }


    // Display the contact form
    public function create()
    {
        return view('contact');
    }

    // Handle form submission
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => ['regex:/^\+?[0-9]+$/'],
            'message' => 'required|min:10',
        ]);

        // Store in the database
        Contact::create($validated);

        // Redirect back with a success message
        return redirect()->route('contact.create')->with('success', 'Your message has been sent!');
    }
}
