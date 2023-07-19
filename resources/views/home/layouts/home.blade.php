<!DOCTYPE html>
<html class="no-js" lang="fa">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Webprog.ir - @yield('title')</title>

    <!-- Custom styles for this template-->
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
{{--    <link href="./css/admin/admin.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('/font/6/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('/font/4/css/font-awesome.css')}}">
    @yield('style')

</head>

<body >
@include('home.section.header')
@include('home.section.mobile_off_canvas-active')
@yield('content')
@include('home.section.footer')


<!-- JavaScript-->
<script src="{{ asset('/js/home/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('/js/home/plugins.js') }}"></script>
<script src="{{ asset('/js/home.js') }}"></script>

{{--@include('sweet::alert')--}}
@yield('script')
</body>

</html>
