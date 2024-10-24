<?php

namespace App\Http\Controllers;

use App\Models\LegalPage;
use Illuminate\Http\Request;

class LegalPageController extends Controller
{
    // Display a list of all legal pages for a specific type
    public function index($type)
    {
        if (!in_array($type, ['Terms and Conditions', 'Privacy Policy', 'Cookies Notice'])) {
            abort(404);
        }

        // Get the legal pages of the specified type
        $pages = LegalPage::where('type', $type)
            ->orderBy('effective_date', 'desc')
            ->get();

        return view('legal.index', compact('pages', 'type'));
    }

    // Display the latest legal page of a specific type
    public function latest($type)
    {
        if (!in_array($type, ['Terms and Conditions', 'Privacy Policy', 'Cookies Notice'])) {
            abort(404);
        }

        // Get the latest legal page for the specified type
        $page = LegalPage::where('type', $type)
            ->orderBy('effective_date', 'desc')
            ->firstOrFail();

        // Extract <h1> headings from the content
        preg_match_all('/<h1>(.*?)<\/h1>/', $page->content, $matches);
        $headings = $matches[1] ?? [];

        return view('legal.show', compact('page', 'headings'));
    }

    // Display a specific legal page by type and date
    public function showByDate($type, $day, $month)
    {
        if (!in_array($type, ['Terms and Conditions', 'Privacy Policy', 'Cookies Notice'])) {
            abort(404);
        }

        // Find the legal page by type and date
        $page = LegalPage::where('type', $type)
            ->whereDay('effective_date', $day)
            ->whereMonth('effective_date', $month)
            ->firstOrFail();

        // Extract <h1> headings from the content
        preg_match_all('/<h1>(.*?)<\/h1>/', $page->content, $matches);
        $headings = $matches[1] ?? [];

        return view('legal.show', compact('page', 'headings'));
    }
}
