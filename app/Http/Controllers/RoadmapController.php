<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Roadmap;
use Illuminate\Http\Request;

class RoadmapController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth')->except(['show']);
    }

    public function index()
    {
        $roadmaps = Roadmap::orderBy('section_number')->get(); // Order by section_number
        return view('roadmap.index', compact('roadmaps'));
    }

    public function create()
    {
        return view('roadmap.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        // Create new roadmap item
        $roadmap = new Roadmap($request->all());
        $roadmap->section_number = $this->generateSectionNumber(); // Assign section_number
        $roadmap->save();

        return redirect()->route('roadmap.index')->with('success', 'Roadmap entry created successfully.');
    }

    public function edit(Roadmap $roadmap)
    {
        return view('roadmap.edit', compact('roadmap'));
    }

    public function update(Request $request, Roadmap $roadmap)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $roadmap->update($request->all());
        $roadmap->section_number = $this->generateSectionNumber(); // Update section_number
        $roadmap->save();

        return view('roadmap.partials.entry', compact('roadmap'));
    }

    public function destroy(Roadmap $roadmap)
    {
        $roadmap->delete();
        $this->updateSectionNumbers(); // Update section numbers after deletion
        return redirect()->route('roadmap.index')->with('success', 'Roadmap entry deleted successfully.');
    }

    public function show()
    {
        $roadmaps = Roadmap::orderBy('section_number')->get();
        return view('roadmap.show', compact('roadmaps'));
    }

    private function generateSectionNumber()
    {
        $lastItem = Roadmap::orderBy('section_number', 'desc')->first();
        return $lastItem ? ($lastItem->section_number + 1) : 1;
    }

    private function updateSectionNumbers()
    {
        $roadmaps = Roadmap::orderBy('created_at')->get();
        $counter = 1;

        foreach ($roadmaps as $roadmap) {
            $roadmap->section_number = $counter;
            $roadmap->save();
            $counter++;
        }
    }
}
