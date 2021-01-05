@extends('customer.template.master')
@section('content')
<!-- slider Area Start-->
<div class="slider-area ">
  <!-- Mobile Menu -->
  <div class="single-slider slider-height2 d-flex align-items-center"
    data-background="{{ asset('customer/img/hero/category.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="hero-cap text-center">
            <h2>Card List</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- slider Area End-->

<!--================Cart Area =================-->
<section class="cart_area section_padding">
  <div class="container">
    <div class="cart_inner">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><p>Product</p></th>
              <th scope="col"><p>Price</p></th>
              <th scope="col"><p>Quantity</p></th>
              <th scope="col"><p>Total</p></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach ($carts as $cart)
              <td>
                <div class="media">
                  <div class="d-flex">
                    <img src="{{asset('storage/'.$cart->product->image_path)}}" alt="" />
                  </div>
                  <div class="media-body">
                    <p><a href="{{url('product/'.$cart->product->slug)}}" style="color: grey">{{$cart->product->prod_name}}</a></p>
                  </div>
                </div>
              </td>
              <td>
                <p>Rp {{@rupiah($cart->product->price)}}</p>
              </td>
              <td>
                <p>{{$cart->quantity}}</p>
              </td>
              <td>
                <p>Rp. {{@rupiah($cart->quantity*$cart->product->price)}}</p>
              </td>
              @endforeach
            </tr>
              <td></td>
              <td></td>
              <td>
                <p>Jumlah harga</p>
              </td>
              <td>
                <p>Rp jumlah</p>
              </td>
            </tr>
            <tr class="shipping_area">
              <td></td>
              <td></td>
              <td>
                <p>Pengiriman </p>
              </td>
              <td>
                <p>Rp ongkir</p><br>
                <div class="shipping_box">
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="checkout_btn_inner float-right">
          <a class="btn_1" href="#">Lanjutkan belanja</a>
          <a class="btn_1 checkout_btn_1" href="{{url('/checkout')}}">Checkout</a>
          {{-- !! DAN TAMBAH VALIDASI KALO BUKAN USER DAKBISA LANJUT YAA --}}
        </div>
      </div>
    </div>
</section>
<!--================End Cart Area =================-->
@endsection