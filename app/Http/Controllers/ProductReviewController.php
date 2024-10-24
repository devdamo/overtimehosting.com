<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductReview;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    public function store(Request $request, Product $product)
    {
        $validated = $request->validate([
            'stars' => 'required|integer|between:1,5',
            'reason' => 'nullable|string',
        ]);

        // Add user ID and product ID to the validated data
        $validated['user_id'] = auth()->id();
        $validated['product_id'] = $product->id;

        // Store the product review
        ProductReview::create($validated);

        // Redirect back to the product page with success message
        return redirect()->route('products.show', $product->id)->with('success', 'Product review submitted successfully!');
    }
}

