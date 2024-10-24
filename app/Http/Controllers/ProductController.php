<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $categoryNames = $request->input('category');
        $cpuBrands = $request->input('cpu'); // Get selected CPU brands
        $selectedRating = $request->input('rating'); // Get selected rating filter

        $products = Product::query(); // Initialize query builder

        // Filter by category if category is present
        $selectedCategory = null;
        if ($categoryNames) {
            $categories = explode(',', $categoryNames);
            $categoryIds = Category::whereIn('name', $categories)->pluck('id');
            $products = $products->whereIn('category_id', $categoryIds);

            // Assuming you're filtering by a single category, fetch the first one
            $selectedCategory = Category::where('name', $categories[0])->first();
        }

        // Filter by CPU brands if CPU brands are present
        if ($cpuBrands) {
            $brands = explode(',', $cpuBrands);
            $products = $products->whereIn('cpu', $brands);
        }

        // Apply search query if present
        if ($query) {
            // Use a basic search on product name or description
            $products = $products->where(function($q) use ($query) {
                $q->where('name', 'like', '%' . $query . '%')
                    ->orWhere('description', 'like', '%' . $query . '%');
            });
        }

        if ($selectedRating) {
            $products = $products->where('star_rating', '>=', $selectedRating);
        }

        // Get the final result
        $products = $products->get();

        // Pass categories and other data to the view
        $categories = Category::all();

        return view('products.index', compact('products', 'categories', 'selectedCategory'));
    }

    public function show(Product $product)
    {
        $productReviews = $product->productReviews()->with('user')->latest()->get();
        $averageRating = $product->averageRating();

        return view('products.show', compact('product', 'productReviews', 'averageRating'));
    }
}
