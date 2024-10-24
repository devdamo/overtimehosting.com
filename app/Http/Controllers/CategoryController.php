<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }
    // Display all categories in a grid format
    public function showCategories()
    {
        $categories = Category::all(); // Get all categories
        return view('categories.index', compact('categories')); // Pass categories to the view
    }

    // Display all products in a specific category
    public function showCategoryProducts(Category $category)
    {
        // Fetch all products that belong to this category
        $products = $category->products; // You can eager load products like this

        // Pass the category and its products to the view
        return view('categories.products', compact('category', 'products'));
    }


    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048' // Validate the image
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('categories/images', 'public'); // Save image to storage
            $validated['image'] = $path; // Add image path to validated data
        }

        Category::create($validated);

        return redirect()->route('categories.index')->with('success', 'Category created successfully!');
    }
}

