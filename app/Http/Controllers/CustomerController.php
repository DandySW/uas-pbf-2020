<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('customer.index', compact('products'));
    }

    public function detailprod($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return view('customer.single-product', compact('product'));
    }
}
