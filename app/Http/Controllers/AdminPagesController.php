<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Pages;
use App\Rules\UniqueSlug;

class AdminPagesController extends Controller
{
    public function index()
    {
        $pages = Pages::whereNull('parent_id')->paginate(20);
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        $pages = Pages::all();
        return view('admin.pages.create', compact('pages'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'slug' => ['required', 'string', 'regex:/^[A-Za-z0-9\-_]+$/', new UniqueSlug()],
            'title' => 'required|string',
            'content' => 'nullable|string',
            'order' => 'required|integer',
            'parent_id' => 'nullable|exists:pages,id',
        ]);

        Pages::create($data);

        return redirect()->route('admin.pages.index')->with('success', 'Page created successfully!');
    }

    public function edit(Pages $page)
    {
        $pages = Pages::all();
        return view('admin.pages.edit', compact('page', 'pages'));
    }

    public function update(Request $request, Pages $page)
    {
        $data = $request->validate([
            'slug' => ['required', 'string', 'regex:/^[A-Za-z0-9\-_]+$/', new UniqueSlug($page->id)],
            'title' => 'required|string',
            'content' => 'nullable|string',
            'order' => 'required|integer',
            'parent_id' => 'nullable|exists:pages,id',
        ]);

        $page->update($data);

        return redirect()->route('admin.pages.index')->with('success', 'Page updated successfully!');
    }

    public function destroy(Pages $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index')->with('success', 'Page deleted successfully!');
    }
}
