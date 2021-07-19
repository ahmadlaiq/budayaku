
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Budayaku - Platform Kompetisi Budaya Indonesia</title>
    <!-- Favicon -->
    <link rel="icon" href={{ asset("images/favicon.png")}}>

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
<body class="section-bg">
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

<section class="section">
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        <div class="card card-primary">
          <div class="modal-header">
            <div>
                <h5 class="modal-title title" id="exampleModalLongTitle2">Login Peserta</h5>
                <p class="font-size-14">Untuk kamu yang sudah terdaftar, silahkan masuk.</p>
            </div>
        </div>

          <div class="card-body">
            <form method="POST" action="{{ route('peserta.login')}}" class="needs-validation" novalidate="">
              @csrf
              <div class="card-body">
                  @if(session('errors'))
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          Terjadi kelasahan:
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">×</span>
                          </button>
                          <ul>
                          @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                          </ul>
                      </div>
                  @endif
                  @if (Session::has('success'))
                      <div class="alert alert-success">
                          {{ Session::get('success') }}
                      </div>
                  @endif
                  @if (Session::has('error'))
                      <div class="alert alert-danger">
                          {{ Session::get('error') }}
                      </div>
                  @endif
              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" tabindex="1" required="" autofocus="">
                <div class="invalid-feedback">
                  Please fill in your email
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                  <div class="float-right">
                    <a href="auth-forgot-password.html" class="text-small">
                      Forgot Password?
                    </a>
                  </div>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required="">
                <div class="invalid-feedback">
                  please fill in your password
                </div>
              </div>

              <div class="form-group">
                <div class="custom-checkbox mb-0">
                  <input type="checkbox" id="rememberchb">
                  <label for="rememberchb">Remember me</label>
              </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                  Login
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="mt-3 text-muted text-center">
          Belum mempunyai akun? <a href="{{ route('peserta.register') }}">Daftar</a>
        </div>
        <div class="mt-3 text-muted text-center">
          <a href="{{ route('penyelenggara.login') }}">Login Sebagai Penyelenggara</a>
        </div>
        <div class="mt-5 text-muted text-center">
          Copyright © Budayaku 2021
        </div>
      </div>
    </div>
  </div>
</section>

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