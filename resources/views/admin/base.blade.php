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
</head>

<body>
<div class="home_dark">
    <div class="row">
        <div class="col-md-2 border-right">
            @include('admin._partials._siderbar')
        </div>
        <div class="col-md-10">
            @include('admin._partials._header')
            @yield('content')
        </div>
    </div>
    @include('admin._partials._footer')
</div>


<!-- vendor plugins -->
@stack('scripts')
<script src="{{asset('js/jquery-3.7.min.js')}}"></script>
<script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>

</body>

</html>
