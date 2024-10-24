<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function show($slug)
    {
        // Fetch the page by its slug
        $page = Pages::where('slug', $slug)->firstOrFail();

        // Return a view to display the page
        return view('pages.show', compact('page'));
    }
}
