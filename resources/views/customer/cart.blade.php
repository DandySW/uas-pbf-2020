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
            <h2>My Cart</h2>
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

    @if (session('success'))
    <div class="alert alert-primary alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button> {{ session('success') }}</div>
    @endif

    @error('quantity')
    <div class="alert alert-danger alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button> {{ $message }}</div>
    @enderror

    <div class="cart_inner">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">
                <p>Nama Produk</p>
              </th>
              <th scope="col">
                <p>Harga</p>
              </th>
              <th scope="col">
                <p class="text-center">Jumlah</p>
              </th>
              <th scope="col">
                <p>Total</p>
              </th>
              <th scope="col">
                <p>Hapus</p>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($carts as $cart)
            <tr>
              <td>
                <div class="media">
                  <div class="d-flex">
                    <a href="{{url('product/'.$cart->product->slug)}}"><img
                        src="{{asset('storage/'.$cart->product->image_path)}}"
                        alt="{{ $cart->product->prod_name }}" /></a>
                  </div>
                  <div class="media-body">
                    <p><a href="{{url('product/'.$cart->product->slug)}}"
                        style="color: grey">{{$cart->product->prod_name}}</a></p>
                  </div>
                </div>
              </td>
              <td>
                <p>Rp. {{@rupiah($cart->product->price)}}</p>
              </td>
              <td>
                <form action="{{ route('mycart.plusminus', $cart->id) }}" method="post" class="d-inline">
                  @method('put')
                  @csrf
                  <input type="hidden" name="quantity" value="minus">
                  <button type=" submit" class="genric-btn default col-3"><i class="fa fa-minus"></i></button>
                </form>
                <div class="genric-btn default-border col-3">
                  {{$cart->quantity}}
                </div>
                <form action="{{ route('mycart.plusminus', $cart->id) }}" method="post" class="d-inline">
                  @method('put')
                  @csrf
                  <input type="hidden" name="quantity" value="plus">
                  <button type=" submit" class="genric-btn default col-3"><i class="fa fa-plus"></i></button>
                </form>
              </td>
              <td>
                <p>Rp. {{@rupiah($cart->quantity*$cart->product->price)}}</p>
              </td>
              <td>
                <form action="{{ route('mycart.destroy',$cart->id) }}" method="post">
                  @method('delete')
                  @csrf
                  <button type="submit" class="genric-btn danger-border"><i class="fa fa-trash"
                      aria-hidden="true"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
            <td colspan="3" class="text-right">
              <p>Jumlah harga:</p>
            </td>
            <td colspan="2" class="text-right">
              <p>Rp {{ @rupiah($total_price) }}</p>
            </td>
            </tr>
          </tbody>
        </table>
        <div class="checkout_btn_inner float-right">
          <a class="btn_1" href="{{ url('/') }}">Lanjutkan belanja</a>
          <a class="btn_1 checkout_btn_1" href="{{url('order-checkout')}}">Checkout</a>
        </div>
      </div>
    </div>
</section>
<!--================End Cart Area =================-->
@endsection