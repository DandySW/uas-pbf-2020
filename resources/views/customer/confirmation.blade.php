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
          <span>Terima Kasih telah berbelanja. Pesananmu akan segera kami siapkan.</span>
        </div>
      </div>
      <div class="col-lg-6 col-lx-4">
        <div class="single_confirmation_details">
          <h4>Info Pesanan</h4>
          <ul>
            <li>
              <p>Nama Pemesan</p><span>: Dewi Chantika Maya</span>
            </li>
            <li>
              <p>No Handphone</p><span>: 08936353289</span>
            </li>
            <li>
              <p>Total Harga</p><span>: Rp 840000</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-lx-4">
        <div class="single_confirmation_details">
          <h4>Alamat Pengiriman</h4>
          <ul>
            <li>
              <p>Provinsit</p><span>: Jawa Timur</span>
            </li>
            <li>
              <p>Kabupaten</p><span>: Situbondo</span>
            </li>
            <li>
              <p>Kecamatan</p><span>: Panarukan</span>
            </li>
            <li>
              <p></p>
            </li>
            <li>
              <p>Alamat Rinci</p><span>: Jl.Cempaka II N0.60</span>
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
              <tr>
                <th colspan="2"><span>NCT Dream Reload Version</span></th>
                <th>3</th>
                <th> <span>Rp 840000</span></th>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th></th>
                <th></th>
                <th scope="col">Total</th>
                <th scope="col" style="color: grey">Rp 840000</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection