<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoArticle;

class VideoArticleController extends Controller
{
    // Show all video articles (public)
    public function index()
    {
        $articles = VideoArticle::all();
        return view('documentation.videos.index', compact('articles'));
    }

    // Show a single video article (public)
    public function show($slug)
    {
        $article = VideoArticle::where('slug', $slug)->firstOrFail();
        return view('documentation.videos.show', compact('article'));
    }

    // Admin: List all articles
    public function adminIndex()
    {
        $articles = VideoArticle::all();
        return view('admin.videos.index', compact('articles'));
    }

    // Admin: Create new article form
    public function create()
    {
        return view('admin.videos.create');
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
            'video_upload' => 'required|string',
            'bg_image' => 'nullable|string',
        ]);

        $article = VideoArticle::create($validated + ['slug' => \Str::slug($request->title)]);

        return redirect()->route('admin.videos.index')->with('success', 'Video Article created successfully.');
    }

    // Admin: Edit article form
    public function edit($id)
    {
        $article = VideoArticle::findOrFail($id);
        return view('admin.videos.edit', compact('article'));
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
            'video_upload' => 'required|string',
            'bg_image' => 'nullable|string',
        ]);

        $article = VideoArticle::findOrFail($id);
        $article->update($validated);

        return redirect()->route('admin.videos.index')->with('success', 'Video Article updated successfully.');
    }

    // Admin: Delete article
    public function destroy($id)
    {
        $article = VideoArticle::findOrFail($id);
        $article->delete();

        return redirect()->route('admin.videos.index')->with('success', 'Article deleted successfully.');
    }
}
