<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::where('user_id', Auth::id())->get();

        $total_price = 0;
        foreach ($carts as $cart) {
            $product = Product::findOrFail($cart->product_id);
            $total_price += ($cart->quantity * $product->price);
        }

        return view('customer.cart', compact('carts', 'total_price'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addtocart(Request $request)
    {
        $request['user_id'] = Auth::id();
        $cart = Cart::where('user_id', Auth::id())->where('product_id', $request->product_id)->first();

        if ($cart == NULL) {
            Cart::create($request->all());
        } else {
            $new_quantity = $cart->quantity + $request->quantity;
            $cart->update(['quantity' => $new_quantity]);
        };


        return back()->with('success', 'Produk berhasil dimasukkan ke dalam keranjang.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function plusminus(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);

        if ($request->quantity == 'plus') {
            $request['quantity'] = $cart->quantity + 1;
            $cart->update(['quantity' => $request->quantity]);
            return redirect(url('mycart'))->with('success', 'Jumlah produk berhasil ditambah.');
        } else {
            $request['quantity'] = $cart->quantity - 1;
            $cart->update(['quantity' => $request->quantity]);
            return redirect(url('mycart'))->with('success', 'Jumlah produk berhasil dikurangi.');
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::destroy($id);

        return redirect(url('mycart'))->with('success', 'Produk berhasil dihapus dari keranjang.');
    }
}
