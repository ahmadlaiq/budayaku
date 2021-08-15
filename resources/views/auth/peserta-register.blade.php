@include('home.layouts.header')

<section class="section">
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        <div class="card card-primary">
          <div class="modal-header">
            <div>
                <h5 class="modal-title title" id="exampleModalLongTitle2">Daftar Sebagai Peserta</h5>
                <p class="font-size-14">Mohon isi data dibawah ini dengan benar.</p>
            </div>
        </div>

          <div class="card-body">
            <form method="POST" action="{{ route('peserta.register')}}" class="needs-validation" novalidate="">
              @csrf
              <div class="card-body">
                @if(session('errors'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Terjadi kesalahan:
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
                <div class="form-group">
                  <label for="nama_lengkap">Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password"> 
                </div>
                <div class="form-group">
                  <label for="password_confirmation">Konfirmasi Password</label>
                  <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                  Register
                </button>
              </div>
              <p class="mt-4">*Dengan melakukan pendaftaran sebagai peserta, maka anda setuju dengan <a href="">Syarat & Ketetuan</a>  dan <a href="">Kebijakan Privasi</a> budayaku.net.</p>
            </form>
          </div>
        </div>
        <div class="mt-5 text-muted text-center">
          Sudah mempunyai akun? <a href="{{ route('peserta.login') }}">Masuk</a>
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