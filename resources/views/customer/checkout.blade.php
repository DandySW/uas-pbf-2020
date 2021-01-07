@extends('customer.template.master')
@section('content')
<!-- slider Area Start-->
<div class="slider-area ">
  <!-- Mobile Menu -->
  <div class="single-slider slider-height2 d-flex align-items-center"
    data-background="{{ asset('customer/img/hero/bg.png') }}">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="hero-cap text-center">
            <h2>Checkout</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- slider Area End-->


<!--================Checkout Area =================-->
<section class="checkout_area section_padding">
  <div class="container">
    <div class="returning_customer">
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-8">

            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif

            <h4>Detail Pesanan</h4>
            <form class="row contact_form" action="{{ route('docheckout') }}" method="post" novalidate="novalidate">
              @csrf
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="number" name="name" placeholder="Nama Lengkap"
                  value="{{ $user->name }}" disabled />
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
                  name="phone_number" value="{{ $user->phone_number }}" placeholder="No Handphone" />
              </div>
              <div class="col-md-12 form-group p_star">
                <select class="country_select" name="province_id">
                  <option value="11">Jawa Timur</option>
                </select>
              </div>
              <div class="col-md-12 form-group p_star">
                <select class="country_select @error('city_id') is-invalid @enderror" name="city_id">
                  @foreach ($cities as $city)
                  <option value="{{ $city->id }}" {{ $user->city_id == $city->id ? "selected":"" }}>
                    {{ $city->city_name }}
                  </option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                  name="address" placeholder="Nama jalan, gedung, rumah" value="{{ $user->address }}" />
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="postcode"
                  name="postcode" placeholder="Kode Pos" value="{{ $user->postcode }}" />
              </div>

              <input type="hidden" name="total_price" value="{{ $total_price }}">
              <button type="submit" class="btn_3 col-sm-12">Buat Pesanan</button>
            </form>
          </div>
          <div class="col-lg-4">
            <div class="order_box">
              <h2>Your Order</h2>
              <ul class="list">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($carts as $cart)
                      <tr>
                        <td>
                          <p style="float: left">{{ $cart->product->prod_name }}</p>
                        </td>
                        <td>
                          <p>{{ $cart->quantity }}</p>
                        </td>
                        <td>
                          <p>Rp. {{ @rupiah($cart->product->price) }}</p>
                        </td>
                        <td>
                          <p>Rp. {{ @rupiah($cart->product->price * $cart->quantity) }}</p>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                </div>
                <ul class="list list_2">
                  <li>
                    <a href="javascript:void(0)">Total
                      <span>Rp. {{ @rupiah($total_price) }}</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Ongkir
                      <span>Rp {{ @rupiah(22000) }}</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Total
                      <span>Rp. {{ @rupiah($total_price + 22000) }}</span>
                    </a>
                  </li>
                </ul>
                <div class="payment_item">
                  <div class="radion_btn">
                    <label for="f-option5">Pembayaran</label>
                  </div>
                  <p>Rekening BCA 122434675 A.n Korea Shop Online</p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection