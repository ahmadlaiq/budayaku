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
<!-- end cssload-loader -->

@include('home.layouts.header')

<section class="listing-form section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="listing-header pb-4">
                    <h3 class="title font-size-28 pb-2">Daftar</h3>
                </div>
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-user mr-2 text-gray"></i>Pilih Peran Kamu</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content">
                        <div class="section-tab check-mark-tab text-center pb-4">
                            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false">
                                        <i class="la la-check icon-element"></i>
                                        <img src={{ asset("images/penyelenggara.png") }} alt="" width="150" height="100">
                                        <span class="d-block pt-2">Sebagai Panyelenggara</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="payoneer-tab" data-toggle="tab" href="#payoneer" role="tab" aria-controls="payoneer" aria-selected="true">
                                        <i class="la la-check icon-element"></i>
                                        <img src={{ asset("images/peserta.png")}} alt="" width="150" height="100">
                                        <span class="d-block pt-2">Sebagai Peserta</span>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- end section-tab -->
                        <div class="tab-content">
                            <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">
                                <div class="form-group">
                                    <a href="{{ route('penyelenggara.register')}}"><button type="button" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                      Selanjutnya <i class="la la-arrow-right ml-1"></i>
                                    </button></a>
                                  </div>
                            </div><!-- end tab-pane-->
                            <div class="tab-pane fade active show" id="payoneer" role="tabpanel" aria-labelledby="payoneer-tab">
                                <div class="row">
                                <div class="col-lg-12">
                                <div class="form-group">
                                    <a href="{{ route('peserta.register')}}"><button type="button" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                      Selanjutnya <i class="la la-arrow-right ml-1"></i>
                                    </button></a>
                                  </div>
                                </div>
                            </div>
                            </div><!-- end tab-pane-->
                        </div><!-- end tab-content -->
                    </div>
                </div><!-- end form-box -->
            </div><!-- end col-lg-9 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

@include('home.layouts.footer')

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->


<!-- Template JS Files -->
<script src={{ asset("js/jquery-3.4.1.min.js") }}></script>
<script src={{ asset("js/jquery-ui.js") }}></script>
<script src={{ asset("js/popper.min.js") }}></script>
<script src={{ asset("js/bootstrap.min.js") }}></script>
<script src={{ asset("js/bootstrap-select.min.js") }}></script>
<script src={{ asset("js/moment.min.js") }}></script>
<script src={{ asset("js/daterangepicker.js") }}></script>
<script src={{ asset("js/owl.carousel.min.js") }}></script>
<script src={{ asset("js/jquery.fancybox.min.js") }}></script>
<script src={{ asset("js/jquery.countTo.min.js") }}></script>
<script src={{ asset("js/animated-headline.js") }}></script>
<script src={{ asset("js/jquery.sparkline.js") }}></script>
<script src={{ asset("js/dashboard.js") }}></script>
<script src={{ asset("js/chart.js") }}></script>
<script src={{ asset("js/chart.extension.js") }}></script>
<script src={{ asset("js/bar-chart.js") }}></script>
<script src={{ asset("js/line-chart.js") }}></script>
<script src={{ asset("js/jquery.ripples-min.js") }}></script>
<script src={{ asset("js/main.js") }}></script>
</body>
</html>


