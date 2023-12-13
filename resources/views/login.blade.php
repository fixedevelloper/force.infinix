
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
    <section class="about-docs about-docs-dark valign-center scroll-section">
        <div class="parallax-bg" id="scene3">
            <img class="layer layer-1" data-depth="0.15" src="img/dark-skin/whitepaper/light-1.png" alt="">
            <img class="layer layer-2" data-depth="0.2" src="img/dark-skin/whitepaper/light-2.png" alt="">
        </div>
        <div class="container mt-5">
            <div class="registration-form">
                <div class="header">
                    <button class="btn btn-tab btn-ripple active" data-target-tab="#signin">
                        SIGN IN
                    </button>
                    <button class="btn btn-tab btn-ripple" data-target-tab="#signup">
                        SIGN UP
                    </button>
                </div>
                <div class="body">
                    <div class="content active" id="signin">
                        <h1>Sign in to your acccount</h1>
                        <p class="gray">Sign in to access all free resources</p>

                        <div class="flex justify-between">
                            <button class="btn btn-oauth">
                                <i class="fab fa-google"></i> Sign in with Google
                            </button>
                            <button class="btn btn-oauth">
                                <i class="fab fa-twitter"></i> Sign in with Twitter
                            </button>
                        </div>

                        <div class="bar"></div>

                        <form action="#">
                            <div class="input-group">
                                <input
                                    type="text"
                                    name=""
                                    id="name"
                                    class="input-elem"
                                    placeholder=" "
                                    autocomplete="off"
                                />
                                <label for="name">Name</label>
                            </div>
                            <div class="input-group">
                                <input
                                    type="password"
                                    name=""
                                    id="password"
                                    class="input-elem"
                                    placeholder=" "
                                    autocomplete="off"
                                />
                                <label for="password">Password</label>
                                <i class="fas fa-eye-slash eye"></i>
                            </div>
                            <div class="agreements">
                                <input type="checkbox" name="" id="rem_pass" />
                                <label for="rem_pass" class="gray">Remember Password</label>
                            </div>
                            <button class="btn btn-register">Sign In</button>
                            <a href="#" class="reg_link">Forgot your password?</a>
                        </form>
                    </div>
                    <div class="content" id="signup">
                        <h1>REGISTER</h1>
                        <p class="gray">
                            You can use this account to log in to any of our products
                        </p>

                        <div class="flex justify-between">
                            <button class="btn btn-oauth">
                                <i class="fab fa-google"></i> Sign up with Google
                            </button>
                            <button class="btn btn-oauth">
                                <i class="fab fa-twitter"></i> Sign up with Twitter
                            </button>
                        </div>

                        <div class="bar"></div>

                        <form action="#">
                            <div class="input-group">
                                <input
                                    type="text"
                                    name=""
                                    id="name"
                                    class="input-elem"
                                    placeholder=" "
                                    autocomplete="off"
                                />
                                <label for="name">Name</label>
                            </div>
                            <div class="input-group">
                                <input
                                    type="email"
                                    name=""
                                    id="email"
                                    class="input-elem"
                                    placeholder=" "
                                    autocomplete="off"
                                />
                                <label for="email">Email</label>
                            </div>
                            <div class="input-group">
                                <input
                                    type="password"
                                    name=""
                                    id="password"
                                    class="input-elem"
                                    placeholder=" "
                                    autocomplete="off"
                                />
                                <label for="password">Password</label>
                                <i class="fas fa-eye-slash eye"></i>
                            </div>
                            <div class="agreements">
                                <input type="checkbox" name="" id="terms" />
                                <label for="terms" class="gray">Agree to our conditions</label>
                            </div>
                            <button class="btn btn-register">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
      {{--  <div class="content">
            <!-- Nav pills -->
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="pill">Login Automatic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="{{route('loginwithaddress')}}">Login with Adresse</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="login" class="container tab-pane active">
                    <div class="d-flex justify-content-between">
                        <a style="width: 100%" type="button" class="btn btn-primary" id="submit_by_id" onclick="login()">Login</a>
                    </div>
                </div>
                <div id="regis" class="container tab-pane fade">
                    <form>
                        <div class="form-group">
                            <label for="InputName">Your Address</label>
                            <input type="text" class="form-control is-valid" id="InputName" placeholder="Full Name">
                       </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>--}}
    </div>
    </section>
</head>
<body class="font-sans antialiased" id="app">
<div class="preloader">
    <div class="top-bg-dark" id="top-bg"></div>
    <div class="loader-middle" id="loader-middle"></div>
    <div class="bottom-bg-dark" id="bottom-bg"></div>
</div>
</body>
<script src="{{asset('js/jquery-3.7.min.js')}}"></script>
<script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>
</html>
