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

    <link rel="stylesheet" href="{{asset('libs/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('libs/spacing.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    @stack('css_or_js')
</head>

<body>
<div class="preloader">
    <div class="top-bg-dark" id="top-bg"></div>
    <div class="loader-middle" id="loader-middle"></div>
    <div class="bottom-bg-dark" id="bottom-bg"></div>
</div>
<div class="home_dark">
    <div class="hero">
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
    </div>
    <div class="row">
        <div class="col-md-2 border-right">
            @include('admin._partials._siderbar')
        </div>
        <div class="col-md-10">
            @include('admin._partials._header')
            @yield('content')
        </div>
    </div>
    <div class="hero">
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
    </div>
    @include('admin._partials._footer')
</div>


<!-- vendor plugins -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/web3@1.7.3/dist/web3.min.js"></script>
<script src="https://bscscan.com/assets/js/custom/web3-eth.min.js"></script>
<script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js" type="application/javascript"></script>
<script src="{{asset('js/jquery-3.7.min.js')}}"></script>
<script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>
<script>
    //preloader
    if ($(".preloader").length > 0) {
        $('#top-bg').delay(1500).slideUp();
        $('#bottom-bg').delay(1500).slideUp();
        $('#loader-middle').delay(1250).fadeOut();
        // Preloader timeout
        setTimeout(function() {
            $('.preloader').addClass('d-none');
        }, 1750);
    };
    $('#menu-btn').click(function () {
        if ($("#menu_sider").hasClass('d-none')){
            $('#menu_sider').removeClass('d-none')
            $('#menu_header').removeClass('d-none')

        }else {
            $('#menu_sider').addClass('d-none')
            $('#menu_header').addClass('d-none')
        }
    })
</script>
@stack('scripts')
</body>

</html>
