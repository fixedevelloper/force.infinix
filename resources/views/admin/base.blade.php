<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Infinix force </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Sites meta Data -->
    <meta name="application-name"
          content="Infinix force - Crypto, BitCoin, Etheruim">
    <meta name="author" content="thetork">
    <meta name="keywords" content="Infinix force - Crypto, BitCoin, Etheruim">
    <meta name="description"
          content="">

    <!-- OG meta data -->
    <meta property="og:title"
          content="">
    <meta property="og:site_name" content=Infinix>
    <meta property="og:url" content="https://infinixforce.io/">
    <meta property="og:description"
          content="Welcome to Infinix,">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/images/og.png">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/core/core.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <!-- main css for template -->
    <link rel="stylesheet" href="{{asset('admin/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/custom_admin.css')}}">
</head>

<body>
<div class="main-wrapper">
@include('admin._partials._siderbar')
    <div class="page-wrapper">
@include('admin._partials._header')
        <div class="page-content">
@yield('content')
        </div>
@include('admin._partials._footer')
    </div>
</div>


<!-- ===============>> scrollToTop start here <<================= -->
<a href="#" class="scrollToTop scrollToTop--style1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
<!-- ===============>> scrollToTop ending here <<================= -->





<!-- vendor plugins -->
@stack('scripts')
<script src="{{asset('admin/vendors/core/core.js')}}"></script>
<script src="{{asset('admin/vendors/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('admin/js/template.js')}}"></script>
<script src="{{asset('admin/js/dashboard-dark.js')}}"></script>

<script src="{{asset('admin/js/custom.js')}}"></script>

</body>

</html>
