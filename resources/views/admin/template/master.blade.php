<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>KOREA SHOP TOWN-Admin</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/images/icon.png')}}">

    {{-- <!-- Pignose Calender -->
    <link href="{{asset('admin/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">

    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('admin/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    --}}

    <!-- Custom Stylesheet -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <!-- Sweet Alert -->
    {{-- <link href="{{asset('admin/plugins/sweetalert/css/sweetalert.css')}}" rel="stylesheet"> --}}
    <!-- Toastr -->
    {{-- <link href="{{asset('admin/plugins/toastr/css/toastr.min.css')}}" rel="stylesheet"> --}}
    <!-- Table -->
    <link href="{{asset('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <!-- Summernote -->
    <link href="{{ asset('admin/plugins/summernote/dist/summernote.css') }}" rel="stylesheet">
</head>

<body>

    @include('admin.template.header')

    @include('admin.template.sidebar')

    @yield('content')

    @include('admin.template.footer')

    @include('admin.template.script')

</body>

</html>