<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\VideoArticle;
use Illuminate\Http\Request;

class AdminVideoArticleController extends Controller
{
    public function index()
    {
        $articles = VideoArticle::all();
        return view('admin.documentation.videos.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.documentation.videos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'read_time' => 'required|integer',
            'markdown' => 'required|string',
            'video_upload' => 'required|file|mimes:mp4,mkv,avi',
            'bg_image' => 'image|nullable',
        ]);

        if ($request->hasFile('bg_image')) {
            $validated['bg_image'] = $request->file('bg_image')->store('video_bg_images');
        }

        $validated['video_upload'] = $request->file('video_upload')->store('videos');

        VideoArticle::create($validated);

        return redirect()->route('admin.documentation.video-articles.index')->with('success', 'Video article created successfully.');
    }

    public function edit(VideoArticle $article)
    {
        return view('admin.documentation.videos.edit', compact('article'));
    }

    public function update(Request $request, VideoArticle $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'read_time' => 'required|integer',
            'markdown' => 'required|string',
            'video_upload' => 'file|mimes:mp4,mkv,avi|nullable',
            'bg_image' => 'image|nullable',
        ]);

        if ($request->hasFile('bg_image')) {
            $validated['bg_image'] = $request->file('bg_image')->store('video_bg_images');
        }

        if ($request->hasFile('video_upload')) {
            $validated['video_upload'] = $request->file('video_upload')->store('videos');
        }

        $article->update($validated);

        return redirect()->route('admin.documentation.video-articles.index')->with('success', 'Video article updated successfully.');
    }

    public function destroy(VideoArticle $article)
    {
        $article->delete();
        return redirect()->route('admin.documentation.video-articles.index')->with('success', 'Video article deleted successfully.');
    }
}
