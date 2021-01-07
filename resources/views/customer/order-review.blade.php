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
            <h2>Confirmation</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- slider Area End-->

<!--================ confirmation part start =================-->
<section class="confirmation_part section_padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="confirmation_tittle">
          <span>Pesanan anda telah kami terima. Pesanan akan segera kami proses begitu pembayaran sudah
            dikonfirmasi.</span>
        </div>
      </div>
      <div class="col-lg-6 col-lx-4">
        <div class="single_confirmation_details">
          <h4>Info Pesanan</h4>
          <ul>
            <li>
              <p>Nama Pemesan</p><span>: {{ $order->user->name }}</span>
            </li>
            <li>
              <p>No Handphone</p><span>: {{ $order->user->phone_number }}</span>
            </li>
            <li>
              <p>Total Harga</p><span>: {{ $order->total }}</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-lx-4">
        <div class="single_confirmation_details">
          <h4>Alamat Pengiriman</h4>
          <ul>
            <li>
              <p>Provinsi</p><span>: {{ $order->user->city->province->prov_name }}</span>
            </li>
            <li>
              <p>Kabupaten/Kota</p><span>: {{ $order->user->city->city_name }}</span>
            </li>
            <li>
              <p>Alamat </p><span>: {{ $order->user->address }}</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="order_details_iner">
          <h3>Order Details</h3>
          <table class="table table-borderless">
            <thead>
              <tr>
                <th scope="col" colspan="2">Nama Produk</th>
                <th scope="col">Quantity</th>
                <th scope="col">Harga</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($od as $details)
              <tr>
                <th colspan="2"><span>{{ $details->product->prod_name }}</span></th>
                <th>{{ $details->quantity }}</th>
                <th> <span>{{ @rupiah($details->product->price *  $details->quantity) }}</span></th>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th></th>
                <th></th>
                <th scope="col">Total</th>
                <th scope="col" style="color: grey">{{ @rupiah($details->order->total) }}</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection