<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('customer.index', compact('products', 'categories'));
    }

    public function category()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('customer.bycategory', compact('products', 'categories'));
    }
}
