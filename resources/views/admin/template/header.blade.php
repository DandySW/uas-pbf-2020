<!--*******************
        Preloader start
    ********************-->
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<!--*******************
        Preloader end
    ********************-->

<!--**********************************
        Main wrapper start
    ***********************************-->
<div id="main-wrapper">

    <!--**********************************
            Nav header start
        ***********************************-->
    <div class="nav-header">
        <a href="{{ url('admin/dashboard') }}">
            <span class="brand-title">
                <img src="{{asset('admin/images/logo-kshop.png')}}" width="200" height="100" alt="">
            </span>
        </a>
    </div>
    <!--**********************************
            Nav header end
        ***********************************-->

    <!--**********************************
            Header start
        ***********************************-->
    <div class="header">
        <div class="header-content clearfix">

            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
            <div class="header-right">
                <ul class="clearfix">
                    <li class="icons dropdown">
                        {{-- <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                            <span class="activity active"></span>
                            <img src="{{asset('admin/images/user/1.png')}}" height="40" width="40" alt="">
            </div> --}}
            <div class="user-img c-pointer position-relative">
                <div class="dropdown-content-body">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <ul>
                            <li><button type="submit" class="btn mb-1 btn-primary"><i class="icon-key"></i>
                                    <span>Logout</span></button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
            </li>
            </ul>
        </div>
    </div>
</div>
<!--**********************************
            Header end ti-comment-alt
        ***********************************-->