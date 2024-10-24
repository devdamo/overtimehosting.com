<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\News;
use Illuminate\Http\Request;
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Extension\Table\TableExtension;
use League\CommonMark\Extension\Autolink\AutolinkExtension;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Exception\CommonMarkException;

class NewsAdminController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * @throws CommonMarkException
     */
    public function store(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'body' => 'required|string',
            'bg_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:204800',
            'news_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:204800',
            'tag' => 'nullable|string|max:255',
        ]);

        // Setup the CommonMark environment with additional extensions for tables and autolinks
        $environment = new Environment();
        $environment->addExtension(new TableExtension());
        $environment->addExtension(new AutolinkExtension());

        $converter = new CommonMarkConverter([], $environment);
        $bodyHtml = $converter->convertToHtml($request->input('body'));

        // Create a new News instance
        $news = new News();
        $news->user_id = auth()->id();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->body = $bodyHtml; // Save the converted HTML
        $news->tag = $request->tag;

        // Handle background image upload
        if ($request->hasFile('bg_image')) {
            $news->bg_image = $request->file('bg_image')->store('news/bg_images', 'public');
        }

        // Handle news logo upload
        if ($request->hasFile('news_logo')) {
            $news->news_logo = $request->file('news_logo')->store('news/logos', 'public');
        }

        // Save the news record
        $news->save();

        return redirect()->route('dashboard.news.index')->with('success', 'News article created successfully.');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'body' => 'required|string',
            'bg_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'news_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tag' => 'nullable|string|max:255',
        ]);

        $news = News::findOrFail($id);

        $news->title = $request->title;
        $news->description = $request->description;
        $news->body = $request->body;

        if ($request->hasFile('bg_image')) {
            $news->bg_image = $request->file('bg_image')->store('news/bg_images', 'public');
        }
        if ($request->hasFile('news_logo')) {
            $news->news_logo = $request->file('news_logo')->store('news/logos', 'public');
        }

        $environment = new Environment();
        $environment->addExtension(new TableExtension());
        $environment->addExtension(new AutolinkExtension());

        $converter = new CommonMarkConverter([], $environment);
        $news->body = $converter->convertToHtml($request->input('body'));

        $news->save();

        return redirect()->route('dashboard.news.index')->with('success', 'News article updated successfully.');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('dashboard.news.index')->with('success', 'News article deleted successfully.');
    }
}
