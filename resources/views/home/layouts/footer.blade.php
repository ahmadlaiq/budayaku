<!-- ================================
       START FOOTER AREA
================================= -->
<section class="footer-area section-bg padding-top-100px padding-bottom-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <div class="footer-logo padding-bottom-30px">
                        <a href="index.html" class="foot__logo"><img src={{ asset("/images/logo.png")}} alt="logo"
                                height="60" width="60"></a>
                    </div><!-- end logo -->
                    {{-- <p class="footer__desc">Morbi convallis bibendum urna ut viverra. Maecenas consequat</p> --}}
                    <ul class="list-items pt-3">
                        <li>Kompleks PT. Semen Indonesia (Persero) Tbk, Kec. Kebomas,<br> Kabupaten Gresik, 61122</li>
                        <li>+62-8953-7723-9641</li>
                        <li><a href="#">budayaku@outlook.com</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Navigasi</h4>
                    <ul class="list-items list--items">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('home.pameran') }}">Pameran</a></li>
                        <li><a href="{{ route('home.kompetisi') }}">Kompetisi</a></li>
                        <li><a href="{{ route('home.tentangkami') }}">Tentang Kami</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Find Us</h4>
                    <ul class="list-items list--items">
                        <li><a href="#"><i class="lab la-facebook-f mr-2"></i>Budayaku Indonesia</a></li>
                        <li><a href="#"><i class="lab la-twitter mr-2"></i>Budayaku.net</a></li>
                        <li><a href="#"><i class="lab la-instagram mr-2"></i>Budayaku_net</a></li>
                        <li><a href="#"><i class="lab la-youtube mr-2"></i>Budayaku Indonesia</a></li>
                        
                        
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        {{-- <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="term-box footer-item">
                    <ul class="list-items list--items d-flex align-items-center">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="footer-social-box text-right">
                    <ul class="social-profile">
                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                        <li><a href="#"><i class="lab la-youtube"></i></a></li>
                    </ul>
                </div>
            </div><!-- end col-lg-4 -->
        </div><!-- end row --> --}}
    </div><!-- end container -->
    <div class="section-block mt-4"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="copy-right padding-top-30px">
                    <p class="copy__desc">
                        &copy; Copyright Budayaku 2021. Made with
                        <span class="la la-heart"></span> by <a href="https://instagram.com/budayaku_net">Tim Budayaku</a>
                    </p>
                </div><!-- end copy-right -->
            </div><!-- end col-lg-7 -->
            {{-- <div class="col-lg-5">
                <div class="copy-right-content d-flex align-items-center justify-content-end padding-top-30px">
                    <h3 class="title font-size-15 pr-2">We Accept</h3>
                    <img src="images/payment-img.png" alt="">
                </div><!-- end copy-right-content -->
            </div><!-- end col-lg-5 --> --}}
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
       START FOOTER AREA
================================= -->
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
<!-- <script src={{ asset("js/chart.js") }}></script>
<script src={{ asset("js/chart.extension.js") }}></script> -->
<!-- <script src={{ asset("js/bar-chart.js") }}></script>
<script src={{ asset("js/line-chart.js") }}></script> -->
<script src={{ asset("js/jquery.ripples-min.js") }}></script>
<script src={{ asset("js/main.js") }}></script>
</body>

</html>