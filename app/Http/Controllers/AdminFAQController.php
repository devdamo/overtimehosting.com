<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Illuminate\Http\Request;

class AdminFAQController extends Controller
{
    public function index()
    {
        $faqs = FAQ::all();
        return view('admin.documentation.faq.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.documentation.faq.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        FAQ::create($validated);

        // Update the redirect to match the correct route name
        return redirect()->route('admin.faq.index')->with('success', 'FAQ created successfully.');
    }

    public function edit($id)
    {
        $faq = FAQ::findOrFail($id);
        return view('admin.documentation.faq.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        $faq = FAQ::findOrFail($id);
        $faq->update($validated);

        return redirect()->route('admin.documentation.faq.index')->with('success', 'FAQ updated successfully.');
    }

    public function destroy($id)
    {
        $faq = FAQ::findOrFail($id);
        $faq->delete();

        return redirect()->route('admin.documentation.faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}
