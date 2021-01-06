@extends('customer.template.master')
@section('content')
<main>
    <!-- slider Area Start -->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider slider-height" data-background="{{asset('customer/img/hero/h1_hero.jpg') }}">
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                <img src="{{asset('customer/img/hero/bp2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInRight" data-delay=".4s">All New Merchandise</span>
                                <h1 data-animation="fadeInRight" data-delay=".6s">Kpop <br> Collection</h1>
                                <p data-animation="fadeInRight" data-delay=".8s">Best Merch Collection By
                                    {{ Date('Y') }}!</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                    <a href="#products" class="btn hero-btn" id="products">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- Latest Products Start -->
    <section class="latest-product-area padding-bottom">
        <div class="container">
            <div class="row product-btn d-flex justify-content-end align-items-end">
                <!-- Section Tittle -->
                <div class="col-xl-4 col-lg-5 col-md-5" id="">
                    <div class="section-tittle mb-30 mt-50">
                        <h2>Our Products</h2>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-7">
                    <div class="properties__button f-right">
                    </div>
                </div>
            </div>
            <!-- Nav Card -->
            <div class="tab-content" id="nav-tabContent">
                <!-- card one -->
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        @foreach ($products as $product)
                        <a href="{{url('product/'.$product->slug)}}" class="col-xl-3 col-lg-3 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ asset('storage/'.$product->image_path) }}"
                                        alt="{{ $product->prod_name }}" style="width: 100%">
                                </div>
                                <div class="product-caption">
                                    <h4>{{$product->prod_name}}</h4>
                                    {{-- !! Kategori --}}
                                    <h5>{{ $product->category->cat_name }}</h5>
                                    <div class="price">
                                        <ul>
                                            <li style="color: #ff003c">Rp {{ @rupiah($product->price) }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- End Nav Card -->
        </div>
    </section>
    <!-- Latest Products End -->

    <!-- Best Product Start -->
    <div class="best-product-area lf-padding mt-100">
        <div class="product-wrapper bg-height" style="background-image: url('customer/img/categori/card.png')">
            <div class="container position-relative">
                <div class="row justify-content-between align-items-end">
                    <div class="product-man position-absolute d-none d-lg-block">
                        <img src="{{ asset('customer/img/categori/card-man.png') }}" alt="" />
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 d-none d-lg-block">
                        <div class="vertical-text">
                            <span>Manz</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="best-product-caption">
                            <h2>
                                Find The Best Product<br />
                                from Our Shop
                            </h2>
                            <p>100% produk dari Ktown4u,Gaho dan original</p>
                            <a href="#products" class="black-btn">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <div class="shape bounce-animate d-none d-md-block">
            <img src="{{ asset('customer/img/hero/bp1.png') }}" alt="" />
        </div>
    </div>
    <!-- Best Product End-->

    <!-- Shop Method Start-->
    <div class="shop-method-area section-padding30 mt-100">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-50">
                        <i class="ti-package"></i>
                        <h6>Free Shipping Method</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-50">
                        <i class="ti-unlock"></i>
                        <h6>Secure Payment System</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-50">
                        <i class="ti-reload"></i>
                        <h6>Secure Payment System</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Method End-->
</main>
@endsection