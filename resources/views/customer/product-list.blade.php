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
                        <h2>product list</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!-- product list part start-->
<section class="product_list section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="product_sidebar">
                    <div class="single_sedebar">
                        <form action="#">
                            <input type="text" name="#" placeholder="Search keyword">
                            <i class="ti-search"></i>
                        </form>
                    </div>
                    <div class="single_sedebar">
                        <div class="select_option">
                            <div class="select_option_list">Category <i class="right fas fa-caret-down"></i> </div>
                            <div class="select_option_dropdown">
                                <p><a href="#">Category 1</a></p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="single_sedebar">
                        <div class="select_option">
                            <div class="select_option_list">Type <i class="right fas fa-caret-down"></i> </div>
                            <div class="select_option_dropdown">
                                <p><a href="#">Type 1</a></p>
                                <p><a href="#">Type 2</a></p>
                                <p><a href="#">Type 3</a></p>
                                <p><a href="#">Type 4</a></p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-md-8">
                <div class="product_list">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ asset('customer/img/product/reload1.png') }}" alt="" class="img-fluid">
                                <h3> <a href="{{url('/single')}}">NCT Dream Reload Version</a> </h3>
                                <h5 style="color: grey">Album</h5>
                                <p style="color:grey">Rp 280000</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ asset('customer/img/product/reload2.png') }}" alt="" class="img-fluid">
                                <h3> <a href="{{url('/single')}}">NCT Dream Ridin Version</a> </h3>
                                <h5 style="color: grey">Album</h5>
                                <p style="color:grey">Rp 280000</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ asset('customer/img/product/bp-ls.png') }}" alt="" class="img-fluid">
                                <h3> <a href="{{url('/single')}}">Blackpink lightstick ver 2</a> </h3>
                                <h5 style="color: grey">Lightstick</h5>
                                <p style="color:grey">Rp 600000</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ asset('customer/img/product/nct-ls.png') }}" alt="" class="img-fluid">
                                <h3> <a href="{{url('/single')}}">NCT Lightstick</a> </h3>
                                <h5 style="color: grey">Lightstick</h5>
                                <p style="color:grey">Rp 280000</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ asset('customer/img/product/exo-ls2.png') }}" alt="" class="img-fluid">
                                <h3> <a href="{{url('/single')}}">EXO lightstick ver 2</a> </h3>
                                <h5 style="color: grey">Lightstick</h5>
                                <p style="color:grey">Rp 280000</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ asset('customer/img/product/exo-ls3.png') }}" alt="" class="img-fluid">
                                <h3> <a href="{{url('/single')}}">EXO lightstick ver 3</a> </h3>
                                <h5 style="color: grey">Lightstick</h5>
                                <p style="color:grey">Rp 280000</p>
                            </div>
                        </div>
                    </div>
                    <div class="load_more_btn text-center">
                        <a href="#" class="btn_3">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection