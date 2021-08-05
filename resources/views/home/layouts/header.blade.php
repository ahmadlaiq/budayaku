<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Budayaku - Platform Kompetisi Budaya Indonesia</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href={{ asset("css/bootstrap.min.css") }}>
    <link rel="stylesheet" href={{ asset("css/bootstrap-select.min.css") }}>
    <link rel="stylesheet" href={{ asset("css/line-awesome.css") }}>
    <link rel="stylesheet" href={{ asset("css/owl.carousel.min.css") }}>
    <link rel="stylesheet" href={{ asset("css/owl.theme.default.min.css") }}>
    <link rel="stylesheet" href={{ asset("css/jquery.fancybox.min.css") }}>
    <link rel="stylesheet" href={{ asset("css/daterangepicker.css") }}>
    <link rel="stylesheet" href={{ asset("css/animate.min.css") }}>
    <link rel="stylesheet" href={{ asset("css/animated-headline.css") }}>
    <link rel="stylesheet" href={{ asset("css/jquery-ui.css") }}>
    <link rel="stylesheet" href={{ asset("css/flag-icon.min.css") }}>
    <link rel="stylesheet" href={{ asset("css/style.css") }}>
</head>
<body>
<!-- start cssload-loader -->
<div class="preloader" id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- ================================
            START HEADER AREA
================================= -->
<header class="header-area">
    <div class="header-menu-wrapper padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-wrapper">
                        <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                        <div class="logo">
                            <a href="/"><img src={{ asset("/images/logo.png")}} alt="logo" height="40" width="40"></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div><!-- end menu-toggler -->
                        </div><!-- end logo -->
                        <div class="main-menu-content">
                            <nav>
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href="{{ route('home.pameran') }}">Pameran</a></li>
                                    <li><a href="#">Kompetisi</a></li>
									<li><a href="#">Tentang Kami</a></li>  
                                </ul>
                            </nav>
                        </div><!-- end main-menu-content -->
                        <div class="nav-btn">
                            <a href="{{ route('peserta.login') }}" class="theme-btn">Masuk</a>
                        </div><!-- end nav-btn -->
                    </div><!-- end menu-wrapper -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-wrapper -->
</header>
<!-- ================================
         END HEADER AREA
================================= -->