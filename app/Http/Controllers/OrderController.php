<?php

namespace App\Http\Controllers;

use App\Cart;
use App\City;
use App\User;
use App\Order;
use App\Order_detail;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkout()
    {
        $carts = Cart::where('user_id', Auth::id())->get();
        $user = Auth::user();
        $cities = City::where('province_id', 11)->get();

        $total_price = 0;
        foreach ($carts as $cart) {
            $total_price += ($cart->quantity * $cart->product->price);
        }

        return view('customer.checkout', compact('user', 'carts', 'total_price', 'cities'));
    }

    public function docheckout(Request $request)
    {
        $request->validate([
            "phone_number" => 'required|numeric|min:10,14',
            "province_id"  => 'required',
            "city_id"      => 'required',
            "address"      => 'required',
            "postcode"     => 'required|size:5',
        ]);

        User::where('id', Auth::id())
            ->update([
                "phone_number" => $request->phone_number,
                "province_id"  => $request->province_id,
                "city_id"      => $request->city_id,
                "address"      => $request->address,
                "postcode"     => $request->postcode,
            ]);

        Order::create([
            'user_id'       => Auth::id(),
            'ongkir'        => 22000,
            'total'         => $request->total_price + 22000,
            'order_status'  => 'belum dibayar',
            'order_date'    => date('Y-m-d'),
        ]);

        $order = Order::where('user_id', Auth::id())->where('order_date', date('Y-m-d'))->orderBy('id', 'desc')->first();
        $carts = Cart::where('user_id', Auth::id())->get();
        foreach ($carts as $cart) {
            Order_detail::create([
                'order_id'   => $order->id,
                'product_id' => $cart->product_id,
                'quantity'   => $cart->quantity,
            ]);

            $product = Product::findOrFail($cart->product_id);
            $product->update([
                'stock' => $product->stock - $cart->product_id,
            ]);
        };

        Cart::where('user_id', Auth::id())->delete();

        return redirect(url('order-review'));
    }

    public function orderreview()
    {
        $order = Order::where('user_id', Auth::id())->where('order_date', date('Y-m-d'))->orderBy('id', 'desc')->first();
        $od = Order_detail::where('order_id', $order->id)->get();

        return view('customer.order-review', compact('order', 'od'));
    }
}
