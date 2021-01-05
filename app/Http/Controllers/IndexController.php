<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\User;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('customer.index', compact('products'));
    }

    public function detail($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return view('customer.single-product', compact('product'));
    }

    public function cart($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return view('customer.single-product', compact('product'));
    }

    public function view()
    {
        $users = User::all();

        return view('admin.view_customer', compact('users'));
    }

}
