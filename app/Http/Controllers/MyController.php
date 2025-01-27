<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products')); // Example view
    }

            public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }
}
