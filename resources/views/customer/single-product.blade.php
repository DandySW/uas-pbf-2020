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
                        <h2>Product Details</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->


<!--================Single Product Area =================-->
<div class="product_image_area">>
    <div class="container">

        @if (session('success'))
        <div class="alert alert-primary alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">×</span>
            </button> {{ session('success') }} <a href="{{ url('mycart') }}" class="alert-link">Cek sekarang</a>.</div>
        @endif

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="product_img_slide owl-carousel">
                    <div class="single_product_img">
                        <img src="{{asset('storage/'.$product->image_path)}}" alt="#" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single_product_text text-left">
                    <h3 style="text-align: center">{{$product->prod_name}}</h3>
                    <h5><b>Kategori:</b> {{$product->category->cat_name}}</h5>
                    <h5><b>Stok:</b> {{$product->stock}}</h5>
                    <h5><b>Harga:</b> Rp. {{@rupiah($product->price) }}</h5>
                    <h5><b>Deskripsi:</b></h5>
                    <blockquote class="generic-blockquote" style="text-align: justify">
                        <p>{!! $product->description !!}</p>
                    </blockquote>
                    <div class="card_area">
                        <form action="{{ route('mycart.addtocart') }}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="product_count_area">
                                <p>Jumlah</p>
                                <div class="product_count d-inline-block">
                                    <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                    <input class="product_count_item input-number" name="quantity" type="text" value="1"
                                        min="1" max="{{ $product->stock }}" readonly>
                                    <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                                </div>
                            </div>
                            <div class="add_to_cart" style="text-align: center">
                                <button type="submit" class="btn_3">Tambah ke dalam Keranjang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--================End Single Product Area =================-->
<!-- subscribe part here -->
<section class="subscribe_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="subscribe_part_content">
                    <h2>Get promotions & updates!</h2>
                    <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic”
                        sources credibly innovate granular internal .</p>
                    <div class="subscribe_form">
                        <input type="email" placeholder="Enter your mail">
                        <a href="#" class="btn_1">Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe part end -->
@endsection