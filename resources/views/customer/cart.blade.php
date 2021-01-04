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
              <th scope="col">Product</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="media">
                  <div class="d-flex">
                    <img src="{{ asset('customer/img/product/reload1.png') }}" alt="" />
                  </div>
                  <div class="media-body">
                    <p><a href="{{url('/single')}}" style="color: grey">NCT Dream Reload Version</a></p>
                  </div>
                </div>
              </td>
              <td>
                <h5>Rp 280000</h5>
              </td>
              <td>
                <div class="product_count">
                  <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                  <input class="input-number" type="text" value="1" min="0" max="10">
                  <span class="input-number-increment"> <i class="ti-plus"></i></span>
                </div>
              </td>
              <td>
                <h5>Rp. total</h5>
              </td>
            </tr>
            <tr>
              <td>
                <div class="media">
                  <div class="d-flex">
                    <img src="{{ asset('customer/img/arrivel/arrivel_2.png') }}" alt="" />
                  </div>
                  <div class="media-body">
                    <p>Blackpink Lightstick ver 2</p>
                  </div>
                </div>
              </td>
              <td>
                <h5>Rp 600000</h5>
              </td>
              <td>
                <div class="product_count">
                  <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                  <input class="input-number" type="text" value="1" min="0" max="10">
                  <span class="input-number-increment"> <i class="ti-plus"></i></span>
                </div>
              </td>
              <td>
                <h5>Rp total</h5>
              </td>
            </tr>
              <td></td>
              <td></td>
              <td>
                <h5>Jumlah harga</h5>
              </td>
              <td>
                <h5>Rp jumlah</h5>
              </td>
            </tr>
            <tr class="shipping_area">
              <td></td>
              <td></td>
              <td>
                <h5>Pengiriman </h5>
              </td>
              <td>
                <h5>Rp ongkir</h5><br>
                <div class="shipping_box">
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="checkout_btn_inner float-right">
          <a class="btn_1" href="#">Continue Shopping</a>
          <a class="btn_1 checkout_btn_1" href="{{url('/checkout')}}">Checkout</a>
          {{-- !! DAN TAMBAH VALIDASI KALO BUKAN USER DAKBISA LANJUT YAA --}}
        </div>
      </div>
    </div>
</section>
<!--================End Cart Area =================-->
@endsection