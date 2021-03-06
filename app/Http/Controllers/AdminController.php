<?php

namespace App\Http\Controllers;

use App\Order;
use App\Order_detail;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function customers()
    {
        $users = User::where('isAdmin', '0')->get();

        return view('admin.view_customers', compact('users'));
    }

    public function order()
    {
        $orders = Order::all();
        $od = Order_detail::all();

        return view('admin.view_order', compact('orders', 'od'));
    }
}
