<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralArticle;

class GeneralArticleController extends Controller
{
    // Show all general articles (public)
    public function index()
    {
        $articles = GeneralArticle::all();
        return view('documentation.general.index', compact('articles'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = GeneralArticle::where('title', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->get();

        return view('documentation.search', compact('results'));
    }



    // Show a single article (public)
    public function show($slug)
    {
        $article = GeneralArticle::where('slug', $slug)->with('author')->firstOrFail();
        return view('documentation.general.show', compact('article'));
    }

    // Admin: List all articles
    public function adminIndex()
    {
        $articles = GeneralArticle::all();
        return view('admin.general.index', compact('articles'));
    }

    // Admin: Create new article form
    public function create()
    {
        return view('admin.general.create');
    }

    // Admin: Store new article
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'how_long_to_read' => 'required|integer',
            'markdown_body' => 'required',
            'bg_image' => 'nullable|string',
        ]);

        $article = GeneralArticle::create($validated + ['slug' => \Str::slug($request->title)]);

        return redirect()->route('admin.general.index')->with('success', 'General Article created successfully.');
    }

    // Admin: Edit article form
    public function edit($id)
    {
        $article = GeneralArticle::findOrFail($id);
        return view('admin.general.edit', compact('article'));
    }

    // Admin: Update article
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'how_long_to_read' => 'required|integer',
            'markdown_body' => 'required',
            'bg_image' => 'nullable|string',
        ]);

        $article = GeneralArticle::findOrFail($id);
        $article->update($validated);

        return redirect()->route('admin.general.index')->with('success', 'Article updated successfully.');
    }

    // Admin: Delete article
    public function destroy($id)
    {
        $article = GeneralArticle::findOrFail($id);
        $article->delete();

        return redirect()->route('admin.general.index')->with('success', 'Article deleted successfully.');
    }
}
