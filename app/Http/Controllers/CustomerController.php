<?php

namespace App\Http\Controllers;

use App\Product;
use App\Blog;

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

    public function detailblog($slug)
    {
        $blog = Blog::where('slug', $slug)->first();

        return view('customer.blog', compact('blog'));
    }

    public function blog()
    {
        $blogs = Blog::all();

        return view('customer.blog-list', compact('blogs'));
    }

}
