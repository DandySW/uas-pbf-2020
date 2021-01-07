<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{ asset('customer/img/LOGO KSHOP.png') }}" alt="logo kshop">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->

@php
$categories = App\Category::all();
@endphp

<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                            <div class="logo">
                                <a href="{{url('/')}}"><img src="{{ asset('customer/img/LOGO KSHOP.png') }}"
                                        alt="logo kshop" height="110" width="130"></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li>
                                            <a href="#">Kategori</a>
                                            <ul class="submenu">
                                                @foreach ($categories as $category)
                                                <li><a href="{{ url('#') }}">{{ $category->cat_name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="{{url('/blogs')}}">Blog</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                            <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                <li>
                                    <div class="shopping-card">
                                        <a href="{{url('/mycart')}}"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="shopping-card">
                                        <a href="{{url('/riwayat')}}"><i class="fas fa-history"></i></a>
                                    </div>
                                </li>
                                @if (Auth::check())
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <ul>
                                        <li><button type="submit" class="btn mb-1 btn-primary"><i class="icon-key"></i>
                                                <span>Logout</span></button>
                                        </li>
                                    </ul>
                                </form>
                                @else
                                <li class="d-none d-lg-block"> <a href="{{url('/login')}}" class="btn header-btn">Sign
                                        in</a></li>

                                @endif
                            </ul>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>