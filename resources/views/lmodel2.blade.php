<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('lmodel/m2/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('lmodel/m2/css/style.css')}}" rel="stylesheet">
</head>

<body class="body" >
<div class="container position-relative ">

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand  navbar-dark sticky-top px-4 py-0">
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
        </a>
        <span> <img src="{{asset('lmodel/m2/img/jaguar.png')}}" width="60px" alt=""></span>
        <!-- <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>-->
        <form class="d-none d-md-flex ms-4">
            <input class="form-control bg-dark border-0" type="search" placeholder="Search">
        </form>
        <a class="btn btn-primary bg-dark m-2" href="#" role="button">GO</a>

        <div class="navbar-nav align-items-center ms-auto">


            <div>
                <a class="btn btn-primary bg-dark-1 m-2" style="border-radius: 10px;" href="#" role="button">Connect Wallet</a>
            </div>
            <div>
                <a class="btn btn-primary bg-dark m-2" style="border-radius: 100px;" href="#" role="button">X</a>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->

    <!-- Sidebar Start -->
    <div class="sidebar  pe-4 pb-3 center-block ">
        <nav class="sidebar-1  navbar-dark">

            <div class="navbar-nav w-100">
                <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Accueil</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="#" class="dropdown-item">Buttons</a>
                        <a href="#" class="dropdown-item">Typography</a>
                        <a href="#" class="dropdown-item">Other Elements</a>
                    </div>
                </div>
                <a href="#" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                <a href="#" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                <a href="#" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="#" class="dropdown-item">Sign In</a>
                        <a href="#" class="dropdown-item">Sign Up</a>
                        <a href="#" class="dropdown-item">404 Error</a>
                        <a href="#" class="dropdown-item">Blank Page</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->

    <!-- Content Start -->
    <div class="content">
        <!-- section profil -->
        <div class="row g-4">
            <div class="col-md-6">
                <div class=" pt-4 px-0 mt-4">
                    <div class="d-flex align-items-left col-sm-12 col-xl-12 ms-4 mt-4 ">
                        <div class="position-relative  " style="height: 100%;">
                            <img class="rounded-circle" src="{{asset('lmodel/m2/img/user.jpg')}}" alt="" style="width: 100px; height: 100px;">
                            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0">Jhon Doe</h6>
                            <span>Admin</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class=" pt-4 px-0">
                    <div class="col-sm-12 col-xl-12 m-2 bloc01" >
                        <div class="col-sm-6">
                            <a style="color: azure; margin: 20px;" href="#">Forsage.io/b/xqg1z8</a>
                        </div>
                        <div class="but0 col-sm-6">
                            <a class="btn btn-primary bg-dark-1 m-2" style="border-radius: 10px;" href="#" role="button">Copy</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-12 m-2 bloc02" >
                        <div class="col-sm-6">
                            <a style="color: azure; margin: 20px;" href="">FRgx Token</a>
                        </div>
                        <div class="but0 col-sm-6">
                            <a class="btn btn-primary bg-dark-1 m-2" style="border-radius: 10px;" href="#" role="button">Copy</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- fin section profil -->


        <!-- section statistique -->
        <div class="row stat g-4 ">
            <div class="col-sm-6 col-xl-3"  style="border-radius: 130%;">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between  p-4">
                    <i class="fa fa-chart-line fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Today Sale</p>
                        <h6 class="mb-0">$1234</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Sale</p>
                        <h6 class="mb-0">$1234</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 ">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-area fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Today Revenue</p>
                        <h6 class="mb-0">$1234</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 ">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-pie fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Revenue</p>
                        <h6 class="mb-0">$1234</h6>
                    </div>
                </div>
            </div>
        </div>
        <!--fin  section statistique -->

        <!-- section trophet -->
        <div class="container-fluid py-4 ">
            <div class="bg-secondary  rounded p-4">
                <div class="row">
                    <div class="col-2 col-sm-2 text-center text-sm-start">
                        <img src="{{asset('lmodel/m2/img/trophee.jpg')}}" width="55px" alt="">
                    </div>
                    <div class="col-2 col-sm-2 text-center text-sm-start">
                        <img src="{{asset('lmodel/m2/img/trophee2.jpg')}}" width="55px" alt="">
                    </div>
                    <div class="col-2 col-sm-2 text-center text-sm-start">
                        <img src="{{asset('lmodel/m2/img/trophee2.jpg')}}" width="55px" alt="">
                    </div>
                    <div class="col-2 col-sm-2 text-center text-sm-start">
                        <img src="{{asset('lmodel/m2/img/trophee2.jpg')}}" width="55px" alt="">
                    </div>
                    <div class="col-2 col-sm-2 text-center text-sm-start">
                        <img src="{{asset('lmodel/m2/img/trophee2.jpg')}}" width="55px" alt="">
                    </div>

                    <div class="col-2 col-sm-2 text-center text-sm-start">
                        <a href="#">Show All</a>
                    </div>

                </div>

            </div>
        </div>
        <!--fin  section trophet -->






        <div class="container-fluid pt-4 px-4">
            <div class=" rounded p-4">
                <div class="row">
                    <div class="col-4 col-sm-4 text-center text-sm-start">
                        <H2>Forsage Programs</H2>
                    </div>
                    <div class="col-3 col-sm-3 text-center text-sm-start">
                        <button type="button" class="btn btn-primary" style="border-radius: 60px;"><i class="fa fa-question-circle"></i> Info</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-secondary text-center rounded p-4">
                        <div class="row">
                            <div class="col-6">
                                <div class="col-sm-12 col-md-12 col-xl-12">

                                    <div class="nbr">
                                        <h4>x3</h4>
                                    </div>
                                    <div class="form-group row " >
                                        <div class="h-100 row m-1 p-1" style="border-radius: 5px;">
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="col-6" >
                                <div class="spa">
                                    <span>147 063 588.78 BUSD</span>
                                </div>

                                <div class="butX" style="border-radius: 5px;">
                                    <button class="btn btn-primary col-form-label mt-4" type="submit">Preview</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-secondary text-center rounded p-4">
                        <div class="row">
                            <div class="col-6">
                                <div class="col-sm-12 col-md-12 col-xl-12">

                                    <div class="nbr">
                                        <h4>x3</h4>
                                    </div>
                                    <div class="form-group row " >
                                        <div class="h-100 row m-1 p-1" style="border-radius: 5px;">
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>
                                            <div class="ptcarreaux col-sm-2 m-1" style="border-radius: 5px;">
                                                <a class="ptcarreaux" href="">.</a>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="col-6" >
                                <div class="spa">
                                    <span>147 063 588.78 BUSD</span>
                                </div>

                                <div class="butX" style="border-radius: 5px;">
                                    <button class="btn btn-primary col-form-label mt-4" type="submit">Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!---- fin bloc banniere-->
        <div class="bloc1 m-4" >
            <div >
                <H1 class="title">AMBASSADOR PROGRAM</H1>
            </div>

            <div class="but">
                <a class="btn btn-primary bg-dark-1 m-2" style="border-radius: 10px;" href="#" role="button">Connect Now</a>

            </div>

        </div>
        <!---- fin bloc banniere-->
        <!-- section Bloc -->
        <div class=" rounded p-4">
            <div class="row">
                <div class="col-8 col-sm-8 text-center text-sm-start">
                    <H2>Platform recent activity</H2>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-md-6 col-xl-8">
                    <div class="h-100 bg-secondary rounded p-4">
                        <div class="d-flex align-items-center border-bottom py-3">
                            <img class="rounded-circle flex-shrink-0" src="{{asset('lmodel/m2/img/iconWallet.png')}}" alt="" style="width: 40px; height: 40px;">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <button type="button" class=" btn btn-info" style="border-radius: 80px;" >ID 1423685</button>
                                    <span>+20 BUSD in x4 </span>
                                    <small>1 minutes ago</small>
                                </div>

                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <img class="rounded-circle flex-shrink-0" src="{{asset('lmodel/m2/img/iconWallet.png')}}" alt="" style="width: 40px; height: 40px;">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <button type="button" class=" btn btn-info" style="border-radius: 80px;" >ID 1423685</button>
                                    <span>+20 BUSD in x4 </span>
                                    <small>1 minutes ago</small>
                                </div>

                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <img class="rounded-circle flex-shrink-0" src="{{asset('lmodel/m2/img/iconWallet.png')}}" alt="" style="width: 40px; height: 40px;">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <button type="button" class=" btn btn-info" style="border-radius: 80px;" >ID 1423685</button>
                                    <span>+5 BUSD in x4 </span>
                                    <small>2 minutes ago</small>
                                </div>

                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <img class="rounded-circle flex-shrink-0" src="{{asset('lmodel/m2/img/iconWallet.png')}}" alt="" style="width: 40px; height: 40px;">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <button type="button" class=" btn btn-info" style="border-radius: 80px;" >ID 1423685</button>
                                    <span>+10 BUSD in x3 </span>
                                    <small>3 minutes ago</small>
                                </div>

                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <img class="rounded-circle flex-shrink-0" src="{{asset('lmodel/m2/img/iconWallet.png')}}" alt="" style="width: 40px; height: 40px;">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <button type="button" class=" btn btn-info" style="border-radius: 80px;" >ID 1423685</button>
                                    <span>+20 BUSD in x4 </span>
                                    <small>3 minutes ago</small>
                                </div>

                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <img class="rounded-circle flex-shrink-0" src="{{asset('lmodel/m2/img/iconWallet.png')}}" alt="" style="width: 40px; height: 40px;">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <button type="button" class=" btn btn-info" style="border-radius: 80px;" >ID 1423685</button>
                                    <span>+5 BUSD in x4 </span>
                                    <small>8 minutes ago</small>
                                </div>

                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <img class="rounded-circle flex-shrink-0" src="{{asset('lmodel/m2/img/iconWallet.png')}}" alt="" style="width: 40px; height: 40px;">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <button type="button" class=" btn btn-info" style="border-radius: 80px;" >ID 1423685</button>
                                    <span>+10 BUSD in x3 </span>
                                    <small>9 minutes ago</small>
                                </div>

                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <img class="rounded-circle flex-shrink-0" src="{{asset('lmodel/m2/img/iconWallet.png')}}" alt="" style="width: 40px; height: 40px;">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <button type="button" class=" btn btn-info" style="border-radius: 80px;" >ID 1423685</button>
                                    <span>+10 BUSD in x3 </span>
                                    <small>9 minutes ago</small>
                                </div>

                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <img class="rounded-circle flex-shrink-0" src="{{asset('lmodel/m2/img/iconWallet.png')}}" alt="" style="width: 40px; height: 40px;">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <button type="button" class=" btn btn-info" style="border-radius: 80px;" >ID 1423685</button>
                                    <span>+10 BUSD in x3 </span>
                                    <small>9 minutes ago</small>
                                </div>

                            </div>
                        </div>
                        <div class="d-grid gap-2 align-items-center mt-4 py-3">
                            <button class="btn btn-outline-light" type="button">see more</button>
                        </div>

                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-xl-4">
                    <div class="h-auto bg-secondary rounded  p-4 m-1">

                        <div class="ms-10 mb-2 border-bottom">
                            <h5 class="mb-2">Members total</h5>
                            <h4 class="mb-0">147 063</h4>
                            <h5 style="color: aqua;"> 571</h5>
                        </div>

                    </div>
                    <div class="h-auto bg-secondary rounded  p-4 m-1">

                        <div class="ms-10 mb-2 border-bottom">
                            <h5 class="mb-2">Member Receiver</h5>
                            <h4 class="mb-0">147 063 588.78 BUSD</h4>
                            <h5 style="color: aqua;">+ 14 897.8 BUSD</h5>
                        </div>
                        <div class="ms-10 border-bottom">
                            <h4 class="mb-0">147 063 588.78 BUSD</h4>
                            <h5 style="color: aqua;">+ 14 897.8 BUSD</h5>
                        </div>
                    </div>
                    <div class="h-auto bg-secondary rounded  p-4 m-1">
                        <div class="d-flex align-items-center border-bottom py-3 justify-content-between ">
                            <h6 class="mb-0">Forsage BUSD Contracts</h6>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <span>x3/x4 </span>
                                    <small>9 minutes ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-1">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <span>x3/x4 </span>
                                    <small>9 minutes ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-1">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <span>x3/x4 </span>
                                    <small>9 minutes ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-1">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <span>x3/x4 </span>
                                    <small>9 minutes ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-1">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <span>x3/x4 </span>
                                    <small>9 minutes ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-1">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <span>x3/x4 </span>
                                    <small>9 minutes ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Footer Start -->
                <div class="container-fluid pt-4 px-4">
                    <div class="rounded-top p-4">
                        <div class="row">
                            <div class="col-12 col-sm-6 text-center text-sm-start">
                                &copy; <a href="#"></a>2024 All Right Reserved.
                            </div>
                            <div class="col-12 col-sm-6 text-center text-sm-end">
                                <span>Documents</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->
            </div>
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
</div>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Template Javascript -->
<script src="{{asset('lmodel/m2/js/main.js')}}"></script>
</body>

</html>
