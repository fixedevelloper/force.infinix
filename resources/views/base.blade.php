
@php
    $config = [
        'appName' => config('app.name'),
        'locale' => $locale = app()->getLocale(),
        'locales' => config('app.locales'),
    ];
@endphp
    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Infinix</title>
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('libs/bootstrap/css/bootstrap.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('libs/animate.min.css')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- owl carousel styles -->
    <link href='{{asset('libs/owl/owl.theme.default.min.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{asset('libs/owl/owl.carousel.min.css')}}' rel='stylesheet' type='text/css'>
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('libs/spacing.min.css')}}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
</head>
<body class="font-sans antialiased" id="app">
<div class="preloader">
    <div class="top-bg-dark" id="top-bg"></div>
    <div class="loader-middle" id="loader-middle"></div>
    <div class="bottom-bg-dark" id="bottom-bg"></div>
</div>
@include('_partials._header')
@yield('content')
{{--@include('_partials._footer')--}}
<a href="#app" id="back-to-top" title="Back to top"><i class="fas fa-angle-up"></i></a>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/web3@1.7.3/dist/web3.min.js"></script>
<script src="https://bscscan.com/assets/js/custom/web3-eth.min.js"></script>
<script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js" type="application/javascript"></script>
<script src="{{asset('js/jquery-3.7.min.js')}}"></script>
<script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('libs/wow.min.js')}}"></script>
<script src="{{asset('libs/owl/owl.carousel.min.js')}}"></script>
<script src="{{asset('libs/parallax.min.js')}}"></script>
<script src="{{asset('libs/jquery.scrollify.js')}}"></script>
<script src="{{asset('js/common.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script type="module" src="{{asset('js/cdn/main.js')}}"></script>
{{--<script src="{{asset('js/cdn/web3.min.js')}}"></script>
<script src="{{asset('js/cdn/truffle-contract.min.js')}}"></script>--}}
<script>
    var configs={
        routes:{
            index: "{{\Illuminate\Support\Facades\URL::to('/')}}",
            dashboard: "{{\Illuminate\Support\Facades\URL::route('admin.dashboard')}}",
            login: "{{\Illuminate\Support\Facades\URL::route('login')}}",
        }
    }
</script>
@stack('scripts')
</body>
</html>
