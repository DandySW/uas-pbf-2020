<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>KOREA TOWN SHOP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('customer/img/icon.png')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('customer/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('customer/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('customer/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('customer/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('customer/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('customer/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('customer/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('customer/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('customer/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('customer/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('customer/css/style.css')}}">
</head>

<body>

    @include('customer/template.header')

    @yield('content')

    @include('customer/template.footer')

    @include('customer/template.script')

</body>

</html>