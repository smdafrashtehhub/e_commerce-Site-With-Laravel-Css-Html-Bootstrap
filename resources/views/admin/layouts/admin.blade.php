<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Webprog.ir - @yield('title')</title>

    <!-- Custom styles for this template-->
    <link href="{{ asset('/css/admin/admin.css') }}" rel="stylesheet">
{{--    <link href="./css/admin/admin.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('/font/6/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('/font/4/css/font-awesome.css')}}">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    @include('admin.sections.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include('admin.sections.topbar')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            @yield('content')
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        @include('admin.sections.footer')
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
@include('admin.sections.scroll_top')

<!-- JavaScript-->
<script src="{{ asset('/js/admin.js') }}"></script>
{{--<script src="{{ asset('js/jquery.czMore-latest.js') }}"></script>--}}
@include('sweetalert::alert')
@yield('script')
</body>

</html>
