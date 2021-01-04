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
                        <h2>product Details</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="product_img_slide owl-carousel">
                    <div class="single_product_img">
                        <img src="{{asset('customer/img/product/reload1.png')}}" alt="#" class="img-fluid">
                    </div>
                    <div class="single_product_img">
                        <img src="{{asset('customer/img/product/reload1.png')}}" alt="#" class="img-fluid">
                    </div>
                    <div class="single_product_img">
                        <img src="{{asset('customer/img/product/reload1.png')}}" alt="#" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single_product_text text-left">
                    <h3 style="text-align: center">NCT Dream Reload Version</h3>
                    <h5><b>Kategori:</b> Album</h5>
                    <h5><b>Stok:</b> 100</h5>
                    <h5><b>Harga:</b> 280000</h5>
                    <h5><b>Deskripsi:</b></h5>
                    <blockquote class="generic-blockquote" style="text-align: justify">
                        Yang Akan Didapatkan:
                            - 2 pcs Poster A5 (Art Carton 260, No Laminasi)
                            - 6 pcs Photocard (Art Carton 260, Ukuran 5,5 x 8,5 cm, No Laminasi)
                            - 8 pcs Garland + Tali (Art Carton 260, ukuran 10 x 15cm, No Laminasi)
                            - 2 pcs Post Card (Art Carton 260, No Laminasi, Ukuran 10 x 15 cm)
                            - 7 pcs Polaroid + Sign (Art Carton 260, No Laminasi, ukuran 6 x 9 cm)
                            - 2 pcs Photostrip (Art Carton 260, No Laminasi, ukuran 5 x 15 cm)
                    </blockquote>
                    <div class="card_area">
                        <div class="product_count_area">
                            <p>Quantity</p>
                            <div class="product_count d-inline-block">
                                <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                <input class="product_count_item input-number" type="text" value="1" min="0" max="8">
                                <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                            </div>
                        </div>
                        <div class="add_to_cart" style="text-align: center">
                            <a href="{{url('/cart')}}" class="btn_3">add to cart</a>
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