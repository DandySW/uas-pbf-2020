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
                        <h2>Artikel Detail</h2>
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
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="product_img_slide owl-carousel">
                    <div class="single_product_img">
                        <img src="{{asset('storage/'.$blog->image_path)}}" alt="#" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single_product_text text-left">
                    <h3 style="text-align: center">{{$blog->title}}</h3>
                    <h5><b>Deskripsi:</b></h5>
                    <blockquote class="generic-blockquote" style="text-align: justify">
                        <p>{!! $blog->content !!}</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--================End Single Product Area =================-->
@endsection