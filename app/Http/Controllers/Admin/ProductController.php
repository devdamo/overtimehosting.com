<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all(); // Add this line if you need categories in the index view
        return view('admin.products.index', compact('products', 'categories'));
    }


    public function create()
    {
        $categories = Category::all(); // Fetch all categories for the dropdown
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',  // Logo size limited to 2MB
            'bg_logo' => 'nullable|image|mimes:jpg,jpeg,png|max:1048576', // bg_logo size limit to 1GB
            'product_description' => 'required|string',
            'features' => 'nullable|string',
            'important_info' => 'nullable|string',
            'long_description' => 'required|string',
            'quick_description' => 'nullable|string',
            'star_rating' => 'required|integer|between:1,5',
            'sale' => 'nullable|numeric',
            'cpu' => 'required|string',
            'seller' => 'required|string',
            'buy_now_url' => 'nullable|url', // Validate as URL
            'category_id' => 'required|exists:categories,id',
        ]);

        // Handle logo upload (if any)
        if ($request->hasFile('logo')) {
            // Store the logo file in the 'public/products/logos' directory
            $logoPath = $request->file('logo')->store('products/logos', 'public');
            // Save the file path to the validated data array
            $validated['logo'] = $logoPath;
        }

        // Handle background logo (bg_logo) upload (if any)
        if ($request->hasFile('bg_logo')) {
            // Store the bg_logo file in the 'public/products/bg_logos' directory
            $bgLogoPath = $request->file('bg_logo')->store('products/bg_logos', 'public');
            // Save the file path to the validated data array
            $validated['bg_logo'] = $bgLogoPath;
        }

        // Create the product using the validated data
        Product::create($validated);

        // Redirect back to the products index with a success message
        return redirect()->route('dashboard.products.index')->with('success', 'Product created successfully!');
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all(); // Fetch all categories
        return view('admin.products.edit', compact('product', 'categories')); // Pass product and categories to the view
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',  // Logo size limited to 2MB
            'bg_logo' => 'nullable|image|mimes:jpg,jpeg,png|max:1048576', // bg_logo size limit to 1GB
            'product_description' => 'required|string',
            'features' => 'nullable|string',
            'important_info' => 'nullable|string',
            'long_description' => 'required|string',
            'quick_description' => 'nullable|string',
            'star_rating' => 'required|integer|between:1,5',
            'sale' => 'nullable|numeric',
            'cpu' => 'required|string',
            'seller' => 'required|string',
            'buy_now_url' => 'nullable|url', // Validate as URL
            'category_id' => 'required|exists:categories,id',
        ]);

        // Handle logo upload (if any)
        if ($request->hasFile('logo')) {
            // Store the logo file in the 'public/products/logos' directory
            $logoPath = $request->file('logo')->store('products/logos', 'public');
            // Save the file path to the validated data array
            $validated['logo'] = $logoPath;
        }

        // Handle background logo (bg_logo) upload (if any)
        if ($request->hasFile('bg_logo')) {
            // Store the bg_logo file in the 'public/products/bg_logos' directory
            $bgLogoPath = $request->file('bg_logo')->store('products/bg_logos', 'public');
            // Save the file path to the validated data array
            $validated['bg_logo'] = $bgLogoPath;
        }

        $product->update($validated);

        return redirect()->route('dashboard.products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('dashboard.products.index')->with('success', 'Product deleted successfully!');
    }
}
