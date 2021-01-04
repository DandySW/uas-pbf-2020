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
                  {{-- <ul class="list">
                    <li>
                      Flat Rate: $5.00
                      <input type="radio" aria-label="Radio button for following text input">
                    </li>
                    <li>
                      Free Shipping
                      <input type="radio" aria-label="Radio button for following text input">
                    </li>
                    <li>
                      Flat Rate: $10.00
                      <input type="radio" aria-label="Radio button for following text input">
                    </li>
                    <li class="active">
                      Local Delivery: $2.00
                      <input type="radio" aria-label="Radio button for following text input">
                    </li>
                  </ul>
                  <h6>
                    Calculate Shipping
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                  </h6> --}}
                  <select class="shipping_select">
                    <option value="1">Jawa Timur</option>
                    <option value="2">India</option>
                    <option value="4">Pakistan</option>
                  </select>
                  <select class="shipping_select section_bg">
                    <option value="1">Situbondo</option>
                    <option value="2">Select a State</option>
                    <option value="4">Select a State</option>
                  </select>
                  <select class="shipping_select section_bg">
                    <option value="1">Panarukan</option>
                    <option value="2">Select a State</option>
                    <option value="4">Select a State</option>
                  </select>
                  <input class="post_code" type="text" placeholder="Alamat lengkap">
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="checkout_btn_inner float-right">
          <a class="btn_1" href="#">Continue Shopping</a>
          <a class="btn_1 checkout_btn_1" href="{{url('/checkout')}}">Checkout</a>
        </div>
      </div>
    </div>
</section>
<!--================End Cart Area =================-->
@endsection