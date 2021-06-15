<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>UISI Lapor || @yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ url('assets/auth/css/style.css') }}" />
    </head>
    <body style="background-color: #ffff;">
        <nav class="navbar navbar-expand-md mb-4" style="background-color: #ffff;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse" style="background-color: #ffff;">
                <ul class="navbar-nav ml-auto">
                    @if (\Request::is('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                </ul>
            </div>
        </nav>
        <br />
        <br />
        <br />

        <main class="main" style="background-color: #ffff;">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 col-xs-3 text-right" style="background-color: #ffff;">
                            <br />
                            <img style="height: 250px;" src="https://img.freepik.com/free-vector/man-with-headphones-microphone-with-computer_113065-136.jpg?size=338&ext=jpg" />
                        </div>
                        <div class="col-md-3 col-xs-3" style="background-color: #ffff;">
                            <br />
                            <br />
                            <br />
                            <h3>UISI <span>Lapor</span></h3>
                            <br />
                            <br />
                            <p>Laporkan Apapun yang terjadi Disekitarmu. AC Rusak, Menemukan Barang, Dan Kehilangan Barang</p>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-4 float-right">
                            @yield('form')
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="footer">
            <div class="footer-logo">www.uisilapor.com</div>
        </div>
    </body>
</html>
