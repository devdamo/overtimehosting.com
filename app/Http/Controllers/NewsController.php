<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Comment;
use App\Models\Rating;
use Illuminate\Http\Request;
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Exception\CommonMarkException;
use League\CommonMark\Extension\Autolink\AutolinkExtension;
use League\CommonMark\Extension\Table\TableExtension;

class NewsController extends Controller
{
    public function index()
    {
        $latestNews = News::orderBy('created_at', 'desc')->take(3)->get();
        $news = News::with('ratings')->latest()->get();

        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $newsItem = News::with(['comments', 'ratings'])->findOrFail($id);
        $averageRating = $newsItem->ratings->avg('stars');
        $newsItem->average_rating = number_format($averageRating, 1);

        $relatedNews = News::where('id', '!=', $id)->latest()->take(5)->get();

        return view('news.show', compact('newsItem', 'relatedNews'));
    }

    /**
     * @throws CommonMarkException
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'body' => 'required|string',
            'bg_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'news_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tag' => 'nullable|string|max:255',
        ]);

        $data = $request->only('title', 'description', 'body', 'tag');
        $data['user_id'] = auth()->id();

        if ($request->hasFile('bg_image')) {
            $data['bg_image'] = $request->file('bg_image')->store('images/news', 'public');
        } else {
            $data['bg_image'] = null;
        }

        if ($request->hasFile('news_logo')) {
            $data['news_logo'] = $request->file('news_logo')->store('images/news', 'public');
        } else {
            $data['news_logo'] = null;
        }

        $environment = new Environment();
        $environment->addExtension(new TableExtension());
        $environment->addExtension(new AutolinkExtension());

        $converter = new CommonMarkConverter([], $environment);
        $data['body'] = $converter->convertToHtml($request->input('body'));

        News::create($data);

        return redirect()->route('news.index')->with('success', 'News article created successfully.');
    }



    public function storeComment(Request $request, $id)
    {

        $request->validate([
            'content' => 'required|max:1000',
        ]);

        Comment::create([
            'news_id' => $id,  // Use the news_id from the route parameter
            'content' => $request->input('content'),
        ]);

        return redirect()->route('news.show', $id);  // Redirect back to the same news article
    }

    public function storeRating(Request $request, $id)
    {
        $request->validate([
            'stars' => 'required|integer|min:1|max:5',
        ]);

        Rating::create([
            'news_id' => $id,
            'stars' => $request->input('stars'),
        ]);

        return redirect()->back();
    }
}
