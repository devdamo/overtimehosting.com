<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GeneralArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminGeneralArticleController extends Controller
{
    public function index()
    {
        $articles = GeneralArticle::all();
        return view('admin.documentation.general.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.documentation.general.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'how_long_to_read' => 'required|integer',
            'markdown_body' => 'required|string',
            'bg_image' => 'image|nullable',
        ]);

        // Handle background image upload if present
        if ($request->hasFile('bg_image')) {
            $validated['bg_image'] = $request->file('bg_image')->store('general_bg_images');
        }

        // Generate the slug based on the title
        $validated['slug'] = Str::slug($validated['title'], '-'); // Generate slug from title

        // Set the user_id (the ID of the authenticated user)
        $validated['user_id'] = auth()->id(); // This directly uses the logged-in user's ID.

        // Add the current timestamp for `date_made`
        $validated['date_made'] = now();

        // Create the article using the validated data
        GeneralArticle::create($validated);

        // Redirect to the index page with success message
        return redirect()->route('admin.documentation.general-articles.index')
            ->with('success', 'General article created successfully.');
    }



    public function show($slug)
    {
        // Find the article by its slug
        $article = GeneralArticle::where('slug', $slug)->firstOrFail();

        // Return the view with the article
        return view('documentation.general.show', compact('article'));
    }



    public function edit($id)
    {
        $article = GeneralArticle::findOrFail($id); // Fetch the article by ID

        return view('admin.documentation.general.edit', compact('article')); // Pass it to the view
    }


    public function update(Request $request, GeneralArticle $article)
    {
        // Validate and update the article
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'how_long_to_read' => 'required|integer',
            'markdown_body' => 'required|string',
            'bg_image' => 'image|nullable',
        ]);

        // Update the article
        $article->update($validated);

        // Redirect to the index route after updating
        return redirect()->route('admin.general-articles.index')->with('success', 'Article updated successfully.');

    }

    public function destroy(GeneralArticle $article)
    {
        // Delete the article
        $article->delete();

        // Redirect to the index route after deletion
        return redirect()->route('admin.documentation.general.index')->with('success', 'Article deleted successfully.');
    }

}
