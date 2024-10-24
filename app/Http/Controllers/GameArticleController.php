<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameArticle;

class GameArticleController extends Controller
{
    // Show all categories and articles (public)
    public function index()
    {
        $categories = GameArticle::select('category')->distinct()->get();
        return view('documentation.games.index', compact('categories'));
    }

    // Show all articles within a category (public)
    public function showCategory($category)
    {
        $articles = GameArticle::where('category', $category)->get();
        return view('documentation.games.category', compact('articles', 'category'));
    }

    // Show a single article (public)
    public function show($slug)
    {
        $article = GameArticle::where('slug', $slug)->firstOrFail();
        return view('documentation.games.show', compact('article'));
    }

    // Admin: List all articles
    public function adminIndex()
    {
        $articles = GameArticle::all();
        return view('admin.games.index', compact('articles'));
    }

    // Admin: Create new article form
    public function create()
    {
        return view('admin.games.create');
    }

    // Admin: Store new article
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'how_long_to_read' => 'required|integer',
            'markdown_body' => 'required',
            'bg_image' => 'nullable|string',
        ]);

        $article = GameArticle::create($validated + ['slug' => \Str::slug($request->title)]);

        return redirect()->route('admin.games.index')->with('success', 'Game Article created successfully.');
    }

    // Admin: Edit article form
    public function edit($id)
    {
        $article = GameArticle::findOrFail($id);
        return view('admin.games.edit', compact('article'));
    }

    // Admin: Update article
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'how_long_to_read' => 'required|integer',
            'markdown_body' => 'required',
            'bg_image' => 'nullable|string',
        ]);

        $article = GameArticle::findOrFail($id);
        $article->update($validated);

        return redirect()->route('admin.games.index')->with('success', 'Article updated successfully.');
    }

    // Admin: Delete article
    public function destroy($id)
    {
        $article = GameArticle::findOrFail($id);
        $article->delete();

        return redirect()->route('admin.games.index')->with('success', 'Article deleted successfully.');
    }
}
