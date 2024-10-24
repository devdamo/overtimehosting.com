<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;

class FaqArticleController extends Controller
{
    // Show all FAQ articles (public)
    public function index()
    {
        $faqs = FAQ::all();
        return view('documentation.faq.index', compact('faqs'));
    }

    // Admin: List all FAQ articles
    public function adminIndex()
    {
        $faqs = FAQ::all();
        return view('admin.faq.index', compact('faqs'));
    }

    // Admin: Create new FAQ form
    public function create()
    {
        return view('admin.faq.create');
    }

    // Admin: Store new FAQ
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        FAQ::create($validated);

        return redirect()->route('admin.faq.index')->with('success', 'FAQ created successfully.');
    }

    // Admin: Edit FAQ form
    public function edit($id)
    {
        $faq = FAQ::findOrFail($id);
        return view('admin.faq.edit', compact('faq'));
    }

    // Admin: Update FAQ
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        $faq = FAQ::findOrFail($id);
        $faq->update($validated);

        return redirect()->route('admin.faq.index')->with('success', 'FAQ updated successfully.');
    }

    // Admin: Delete FAQ
    public function destroy($id)
    {
        $faq = FAQ::findOrFail($id);
        $faq->delete();

        return redirect()->route('admin.faq.index')->with('success', 'FAQ deleted successfully.');
    }
}
