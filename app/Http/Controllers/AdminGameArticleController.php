<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GameArticle;
use Illuminate\Http\Request;

class AdminGameArticleController extends Controller
{
    public function index()
    {
        $articles = GameArticle::all();
        return view('admin.documentation.games.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.documentation.games.create');
    }

    public function store(Request $request)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'how_long_to_read' => 'required|integer',
            'markdown_body' => 'required|string',
            'bg_image' => 'nullable|image|max:20480000', // You might need to adjust this validation for images
        ]);

        // If there's an uploaded image, store it and include it in the data
        if ($request->hasFile('bg_image')) {
            $validated['bg_image'] = $request->file('bg_image')->store('game_bg_images');
        }

        // Add the currently authenticated user as the article creator
        $validated['article_creator'] = auth()->user()->id; // Or auth()->user()->name if you store the name instead

        // Create the GameArticle record in the database
        GameArticle::create($validated);

        return redirect()->route('admin.documentation.game-articles.index')->with('success', 'Game article created successfully.');
    }


    public function edit(GameArticle $article)
    {
        return view('admin.games.edit', compact('article'));
    }

    public function update(Request $request, GameArticle $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'read_time' => 'required|integer',
            'markdown' => 'required|string',
            'bg_image' => 'image|nullable',
        ]);

        if ($request->hasFile('bg_image')) {
            $validated['bg_image'] = $request->file('bg_image')->store('game_bg_images');
        }

        $article->update($validated);

        return redirect()->route('admin.documentation.game-articles.index')->with('success', 'Game article updated successfully.');
    }

    public function destroy(GameArticle $article)
    {
        $article->delete();
        return redirect()->route('admin.documentation.game-articles.index')->with('success', 'Game article deleted successfully.');
    }
}
