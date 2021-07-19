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
                                    <li><a href="/">Home</a></li>
                                    <li><a href="#">Pameran</a></li>
									<li><a href="#">About</a></li>
                                    <li><a href="#">Contact Us</a></li>    
                                </ul>
                            </nav>
                        </div><!-- end main-menu-content -->
                        <div class="nav-btn">
                            <a href="{{ route('home.pilih-daftar') }}" class="theme-btn">Sign Up</a>
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