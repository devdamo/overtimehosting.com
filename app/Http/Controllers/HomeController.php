<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Category;


class HomeController extends Controller
{
    public function index()
    {
        // Fetch the latest 3 news
        $news = News::orderBy('created_at', 'desc')->take(3)->get();

        // Fetch all categories
        $categories = Category::all();

        // Pass both news and categories to the index.blade.php view
        return view('main', compact('news', 'categories'));
    }

    public function qna()
    {
        return view('qna.main');
    }

    public function road()
    {
        return view('roadmap.main');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

}
