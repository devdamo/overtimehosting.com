<?php

namespace App\Http\Controllers;

use App\Models\GeneralArticle;
use App\Models\GameArticle;
use App\Models\VideoArticle;
use App\Models\FAQ;
use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    // Show main documentation page with categories
    public function index()
    {
        return view('documentation.index');
    }

    // Show General articles
    public function showGeneral()
    {
        $articles = GeneralArticle::all();
        return view('documentation.general', compact('articles'));
    }

    // Show Game articles
    public function showGames()
    {
        $categories = GameArticle::distinct()->pluck('category');
        return view('documentation.games', compact('categories'));
    }

    // Show Articles inside Game Categories
    public function showGameCategory($category)
    {
        $articles = GameArticle::where('category', $category)->get();
        return view('documentation.game-category', compact('articles', 'category'));
    }

    // Show Video articles
    public function showVideos()
    {
        $articles = VideoArticle::all();
        return view('documentation.videos', compact('articles'));
    }

    // Show FAQ
    public function showFAQ()
    {
        $faqs = FAQ::all();
        return view('documentation.faq', compact('faqs'));
    }

    // Search articles
    public function search(Request $request)
    {
        $query = $request->input('query');
        $generalResults = GeneralArticle::where('title', 'LIKE', "%{$query}%")->get();
        $gameResults = GameArticle::where('title', 'LIKE', "%{$query}%")->get();
        $videoResults = VideoArticle::where('title', 'LIKE', "%{$query}%")->get();
        return view('documentation.search', compact('generalResults', 'gameResults', 'videoResults', 'query'));
    }
}
