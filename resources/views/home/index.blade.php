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

<section class="breadcrumb-area bread-bg">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title line-height-55 text-white">Mari Berkompetisi
                                <br> Menciptakan Kreasi</h2>
                            <p class="sec__desc pt-2 text-white">Budayaku mewadahi kompetisi budaya di Indonesia.<br> Bergabung dengan kami, ciptakan kreasi terbaik kapanpun dan dimanapun berada.</p>
                        </div>
                        <div class="btn-box pt-4">
                            <a href="{{ route('home.pilih-daftar') }}" class="theme-btn border-0">Daftar Sekarang</a>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
    <div class="bread-svg-box">
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
    </div><!-- end bread-svg -->
</section>

<section class="info-area info-bg padding-top-100px padding-bottom-60px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Bagaimana Cara Kerja Budayaku?</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-3 d-flex">
                    <div class="info-icon flex-shrink-0">
                        <i class="la la-sign-in"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Daftar</h4>
                        <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam odio
                        </p>
                        <span class="info__num">1</span>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-3 d-flex">
                    <div class="info-icon flex-shrink-0">
                        <i class="la la-gears"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Upload Karyamu</h4>
                        <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam odio
                        </p>
                        <span class="info__num">2</span>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-3 d-flex">
                    <div class="info-icon flex-shrink-0">
                        <i class="la la-money"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Dapatkan Hadiah</h4>
                        <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam odio
                        </p>
                        <span class="info__num">3</span>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<section class="video-area padding-top-100px text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video-content z-index-1">
                    <div class="video-content-img ripple-bg jquery-ripples">
                        <img src="images/bg-jmb.jpg" alt="">
                    <canvas width="1170" height="487" style="position: absolute; inset: 0px; z-index: -1;"></canvas></div>
                    <div class="video-content-box">
                        <div class="section-heading">
                            <h2 class="sec__title text-white line-height-55">Share the Beauty of Your <br> Culture to the World</h2>
                        </div><!-- end section-heading -->
                        <div class="btn-box pt-4">
                            <a href="#" class="icon-element text-white" data-fancybox="video" data-src="https://www.youtube.com/watch?v=0GZSfBuhf6Y" data-speed="700">
                                <i class="la la-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<section class="info-area section-bg padding-top-200px padding-bottom-100px text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title">Kenapa kamu harus menggunakan
                        platform Budayaku?</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-60px">
            <div class="col-lg-4 responsive-column">
                <div class="icon-box">
                    <div class="info-icon">
                        <i class="la la-money"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Earn an additional income</h4>
                        <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam odio
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="icon-box">
                    <div class="info-icon">
                        <span><i class="la la-users"></i></span>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Open your network</h4>
                        <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam odio
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="icon-box">
                    <div class="info-icon">
                        <span><i class="la la-language"></i></span>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title line-height-26">Practice your language</h4>
                        <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam odio
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box">
                    <a href="#" class="theme-btn">Daftar Sekarang</a>
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<section class="blog-area padding-top-30px padding-bottom-90px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title line-height-55">Rekomendasi Kompetisi</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-4 responsive-column">
                <div class="card-item blog-card">
                    <div class="card-img">
                        <img src="images/blog-img.jpg" alt="blog-img">
                        <div class="card-body">
                            <h3 class="card-title line-height-26"><a href="{{ route('peserta.login')}}">Kompetisi Tari Jaipong Tingkat Nasional</a></h3>
                            <p class="card-meta">
                                <span class="post__date"> Total Hadiah</span>
                                <span class="post-dot"></span>
                                <span class="post__time">Rp.50.000.000</span>
                            </p>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="images/small-team1.jpg" alt="testimonial image">
                            </div>
                            <div class="author-bio">
                                <a href="#" class="author__title">Pemkab Gresik</a>
                            </div>
                        </div>
                        <div class="post-share">
                            <ul>
                                <li>
                                    <i class="la la-share icon-element"></i>
                                    <ul class="post-share-dropdown d-flex align-items-center">
                                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item blog-card">
                    <div class="card-img">
                        <img src="images/blog-img.jpg" alt="blog-img">
                        <div class="card-body">
                            <h3 class="card-title line-height-26"><a href="{{ route('peserta.login')}}">Kompetisi Tari Jaipong Tingkat Nasional</a></h3>
                            <p class="card-meta">
                                <span class="post__date"> Total Hadiah</span>
                                <span class="post-dot"></span>
                                <span class="post__time">Rp.50.000.000</span>
                            </p>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="images/small-team1.jpg" alt="testimonial image">
                            </div>
                            <div class="author-bio">
                                <a href="#" class="author__title">Pemkab Surabaya</a>
                            </div>
                        </div>
                        <div class="post-share">
                            <ul>
                                <li>
                                    <i class="la la-share icon-element"></i>
                                    <ul class="post-share-dropdown d-flex align-items-center">
                                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item blog-card">
                    <div class="card-img">
                        <img src="images/blog-img.jpg" alt="blog-img">
                        <div class="card-body">
                            <h3 class="card-title line-height-26"><a href="{{ route('peserta.login')}}">Kompetisi Tari Jaipong Tingkat Nasional</a></h3>
                            <p class="card-meta">
                                <span class="post__date"> Total Hadiah</span>
                                <span class="post-dot"></span>
                                <span class="post__time">Rp.50.000.000</span>
                            </p>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="images/small-team1.jpg" alt="testimonial image">
                            </div>
                            <div class="author-bio">
                                <a href="#" class="author__title">Dinas Pariwisata</a>
                            </div>
                        </div>
                        <div class="post-share">
                            <ul>
                                <li>
                                    <i class="la la-share icon-element"></i>
                                    <ul class="post-share-dropdown d-flex align-items-center">
                                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box text-center pt-4">
                    <a href="blog-grid.html" class="theme-btn">Show All Competition</a>
                </div>
            </div>
        </div>
    </div><!-- end container -->
</section>

<section class="faq-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Pertanyaan Umum</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-40px">
            <div class="col-lg-7">
                <div class="accordion accordion-item" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="faqHeadingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link d-flex align-items-center justify-content-between" type="button" data-toggle="collapse" data-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                    <span>How will I open a account?</span>
                                    <i class="la la-minus"></i>
                                    <i class="la la-plus"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="faqCollapseOne" class="collapse show" aria-labelledby="faqHeadingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by injected humour, or randomised words
                                    which don't look even slightly believable.</p>
                            </div>
                        </div>
                    </div><!-- end card -->
                    <div class="card">
                        <div class="card-header" id="faqHeadingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link d-flex align-items-center justify-content-between" type="button" data-toggle="collapse" data-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                    <span>How do I update or extend my availabilities?</span>
                                    <i class="la la-minus"></i>
                                    <i class="la la-plus"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="faqCollapseTwo" class="collapse" aria-labelledby="faqHeadingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by injected humour, or randomised words
                                    which don't look even slightly believable.</p>
                            </div>
                        </div>
                    </div><!-- end card -->
                    <div class="card">
                        <div class="card-header" id="faqHeadingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link d-flex align-items-center justify-content-between" type="button" data-toggle="collapse" data-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                    <span> How do I increase conversion rate?</span>
                                    <i class="la la-minus"></i>
                                    <i class="la la-plus"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="faqCollapseThree" class="collapse" aria-labelledby="faqHeadingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by injected humour, or randomised words
                                    which don't look even slightly believable.</p>
                            </div>
                        </div>
                    </div><!-- end card -->
                    <div class="card">
                        <div class="card-header" id="faqHeadingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link d-flex align-items-center justify-content-between" type="button" data-toggle="collapse" data-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                                    <span> How do I upload products?</span>
                                    <i class="la la-minus"></i>
                                    <i class="la la-plus"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="faqCollapseFour" class="collapse" aria-labelledby="faqHeadingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by injected humour, or randomised words
                                    which don't look even slightly believable.</p>
                            </div>
                        </div>
                    </div><!-- end card -->
                    <div class="card">
                        <div class="card-header" id="faqHeadingFive">
                            <h2 class="mb-0">
                                <button class="btn btn-link d-flex align-items-center justify-content-between" type="button" data-toggle="collapse" data-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
                                    <span>How will I receive my payment?</span>
                                    <i class="la la-minus"></i>
                                    <i class="la la-plus"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="faqCollapseFive" class="collapse" aria-labelledby="faqHeadingFive" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by injected humour, or randomised words
                                    which don't look even slightly believable.</p>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div>
                <div class="accordion-help-text pt-2">
                    <p class="font-size-14 font-weight-regular">Any questions? Just visit our <a href="#" class="color-text">Help center</a> or <a href="#" class="color-text">Contact Us</a></p>
                </div>
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="faq-forum pl-4">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">Still have question?</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content">
                            <div class="contact-form-action">
                                <form method="post">
                                    <div class="input-box">
                                        <label class="label-text">Your Name</label>
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control" type="text" name="text" placeholder="Your name">
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <label class="label-text">Your Email</label>
                                        <div class="form-group">
                                            <span class="la la-envelope-o form-icon"></span>
                                            <input class="form-control" type="email" name="email" placeholder="Email address">
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <label class="label-text">Message</label>
                                        <div class="form-group">
                                            <span class="la la-pencil form-icon"></span>
                                            <textarea class="message-control form-control" name="message" placeholder="Write message"></textarea>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <button type="button" class="theme-btn">Send Message</button>
                                    </div>
                                </form>
                            </div><!-- end contact-form-action -->
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                </div><!-- end faq-forum -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<section class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-heading">
                    <p class="sec__desc text-white-50 pb-1">Get Updates &amp; More</p>
                    <h2 class="sec__title font-size-30 text-white">Thoughtful thoughts to your inbox</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="subscriber-box">
                    <div class="contact-form-action">
                        <form action="#">
                            <div class="input-box">
                                <label class="label-text text-white">Enter email address</label>
                                <div class="form-group mb-0">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="email" name="email" placeholder="Email address">
                                    <button class="theme-btn theme-btn-small submit-btn" type="submit">Subscribe</button>
                                    <span class="font-size-14 pt-1 text-white-50"><i class="la la-lock mr-1"></i>Don't worry your information is safe with us.</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-5 -->
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