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
                        <h2>Blog List</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @foreach ($blogs as $blog)
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="{{ asset('storage/'.$blog->image_path) }}" alt="">
                            <a href="{{ url('blog/'.$blog->slug) }}" class="blog_item_date">
                                <h3>{{ date('d', strtotime($blog->created_at)) }}</h3>
                                <p>{{ date('M', strtotime($blog->created_at)) }}</p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="{{ url('blog/'.$blog->slug) }}">
                                <h2>{{ $blog->title }}</h2>
                            </a>
                            <p>{!! ReadMoreSpace($blog->content, 500)!!}<a
                                    href="{{ url('blog/'.$blog->slug) }}">...(baca selengkapnya)</a></p>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
@endsection

<!-- Read More Function -->
<?php
function ReadMoreSpace($input, $length)
{
    if (strlen($input) <= $length) {
        return $input;
    } else {
        $trimmed_text = substr($input, 0, $length);
        return $trimmed_text;
    }
}
?>