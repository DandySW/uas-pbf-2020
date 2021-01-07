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
                        <h2>Artikel</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->


<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{ asset('storage/'.$blog->image_path) }}" alt="">
                    </div>
                    <div class="blog_details">
                        <h2>{{ $blog->title }}</h2>
                        <p class="excert">
                            {!! $blog->content !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Blog Area end =================-->
@endsection