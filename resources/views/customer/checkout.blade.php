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
          <h4>Detail Pesanan</h4>
          <form class="row contact_form" action="#" method="post" novalidate="novalidate">
            <div class="col-md-6 form-group p_star">
              <input type="text" class="form-control" id="number" name="number" placeholder="Nama Lengkap" />
            </div>
            <div class="col-md-6 form-group p_star">
              <input type="text" class="form-control" id="email" name="compemailany" placeholder="No Handphone" />
            </div>
            <div class="col-md-12 form-group p_star" >
              <select class="country_select">
                <option value="1">Jawa Timur</option>
                <option value="2">Jawa Tengah</option>
                <option value="3">Jawa Barat</option>
                <option value="4">Yogyakartar</option>
                <option value="5">DKI Jakarta</option>
                <option value="6">Bali</option>
                <option value="7">Kalimantan Timur</option>
                <option value="8">Kalimantan Tengah</option>
                <option value="9">Kalimantan Barat</option>
              </select>
            </div>
            <div class="col-md-12 form-group p_star" >
              <select class="country_select">
                <option value="1">Malang</option>
                <option value="2">Situbondo</option>
                <option value="3">Surabaya</option>
              </select>
            </div>
            <div class="col-md-12 form-group">
              <input type="text" class="form-control" id="zip" name="zip" placeholder="Kode Pos" />
            </div>
            <div class="col-md-12 form-group">
              <input type="text" class="form-control" id="zip" name="zip" placeholder="Nama jalan, gedung, rumah" />
            </div>
            <div class="col-md-12 form-group">
              <input type="text" class="form-control" id="zip" name="zip" placeholder="Alamat Rinci (Opsional)" />
            </div>
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
                    <tr>
                      <td>
                        <p style="float: left">NCT Dream Reload Version</p>
                      </td>
                      <td>
                        <p>3</p>
                      </td>
                      <td>
                        <p>Rp 280000</p>
                      </td>
                      <td>
                        <p>Rp 280000</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            <ul class="list list_2">
              <li>
                <a href="#">Total harga
                  <span>$2160.00</span>
                </a>
              </li>
              <li>
                <a href="#">Pengiriman
                  <span>Rp 8000</span>
                </a>
              </li>
              <li>
                <a href="#">Total
                  <span>$2210.00</span>
                </a>
              </li>
            </ul>
            <div class="payment_item">
              <div class="radion_btn">
                <label for="f-option5">Pembayaran</label>
                <div class="check"></div>
              </div>
              <p>Rekening BCA 122434675 A.n Korea Shop Online</p>
            </div>
            <a class="btn_3" href="#">Buat Pesanan</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection