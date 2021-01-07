<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Blog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $cart = Cart::where('user_id', Auth::id())->where('product_id', $product->id)->first();
        if ($cart == NULL) {
            $cart['quantity'] = 0;
        }

        return view('customer.single-product', compact('product', 'cart'));
    }

    public function blog()
    {
        $blogs = Blog::all();

        return view('customer.blog-list', compact('blogs'));
    }

    public function detailblog($slug)
    {
        $blog = Blog::where('slug', $slug)->first();

        return view('customer.blog', compact('blog'));
    }
}
