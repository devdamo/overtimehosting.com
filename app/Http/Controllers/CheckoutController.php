<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CheckoutController extends Controller
{
    public function index(Product $product)
    {
        // Pass the product data to the checkout view
        return view('checkout.index', compact('product'));
    }
}
