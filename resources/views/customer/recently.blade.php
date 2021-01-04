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
            <h2>Riwayat Pesanan</h2>
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
              <th scope="col">No</th>
              <th scope="col">Tanggal Pesanan</th>
              <th scope="col">Nama Pesanan</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <p>1</p>
              </td>
              <td>
                <p><a href="{{url('/confirmation')}}" style="color: grey">{{ Date('d-M-Y') }}</a></p>
              </td>
              <td>
                <p><a href="{{url('/confirmation')}}" style="color: grey">NCT Dream Reload Version</a></p>
              </td>
              <td>
                <p>Rp 840000</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</section>
<!--================End Cart Area =================-->
@endsection