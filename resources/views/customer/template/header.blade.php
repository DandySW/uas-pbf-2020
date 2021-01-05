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
                                <a href="#"><img src="{{ asset('customer/img/LOGO KSHOP.png') }}" alt="logo kshop"
                                        height="110" width="130"></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    {{-- <ul id="navigation">
                                        <li><a href="{{url('/')}}">Home</a></li>
                                    <li>
                                        <a href="blog.html">Kategori</a>
                                        <ul class="submenu">
                                            @foreach ($categories as $category)
                                            <li><a href="{{ url('#') }}">{{ $category->cat_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{url('/contact')}}">Contact</a></li>
                                    </ul> --}}
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                            <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                <li class="d-none d-xl-block">
                                    <div class="form-box f-right ">
                                        <input type="text" name="Search" placeholder="Search products">
                                        <div class="search-icon">
                                            <i class="fas fa-search special-tag"></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="shopping-card">
                                        <a href="{{url('/cart')}}"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="shopping-card">
                                        <a href="{{url('/riwayat')}}"><i class="fas fa-history"></i></a>
                                    </div>
                                </li>
                                <li class="d-none d-lg-block"> <a href="{{url('/login')}}" class="btn header-btn">Sign
                                        in</a></li>
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