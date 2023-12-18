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
    <!-- Font Awesome -->
    <link href="{{asset('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    @stack('css_or_js')
</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->
<div id="main-wrapper">
    @include('admin._partials._header')
    @include('admin._partials._siderbar')
{{--    <div class="hero">
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
    </div>--}}
    <div class="content-body">
        <div class="container-fluid">
        @yield('content')
        </div>
    </div>


    @include('admin._partials._footer')
</div>


<!-- vendor plugins -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/web3@1.7.3/dist/web3.min.js"></script>
<script src="https://bscscan.com/assets/js/custom/web3-eth.min.js"></script>
<script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js" type="application/javascript"></script>
<script src="{{asset('admin/vendor/global/global.min.js')}}"></script>
<script src="{{asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('admin/js/custom.min.js')}}"></script>
{{--<script src="{{asset('admin/vendor/apexchart/apexchart.js')}}"></script>
<script src="{{asset('admin/vendor/owl-carousel/owl.carousel.js')}}"></script>--}}
{{--<script src="{{asset('admin/js/dashboard/dashboard-4.js')}}"></script>--}}
<script src="{{asset('admin/js/deznav-init.js')}}"></script>
<script>
    jQuery(document).ready(function(){
        setTimeout(function(){
            dezSettingsOptions.version = 'dark';
            new dezSettings(dezSettingsOptions);
        }, 200);

    });

</script>
@stack('scripts')
</body>

</html>
