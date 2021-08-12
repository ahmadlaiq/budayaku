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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

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
    <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
   
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

    <!-- ================================
       START USER CANVAS MENU
================================= -->
    <div class="user-canvas-container">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div><!-- end menu-toggler -->
        <div class="user-canvas-nav">
            <div class="section-tab section-tab-2 text-center pt-4 pb-3 pl-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="notification-tab" data-toggle="tab" href="#notification"
                            role="tab" aria-controls="notification" aria-selected="false">
                            Notifications
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="account-tab" data-toggle="tab" href="#account" role="tab"
                            aria-controls="account" aria-selected="true">
                            Account
                        </a>
                    </li>
                </ul>
            </div><!-- end section-tab -->
        </div>
        <div class="user-canvas-nav-content">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="notification" role="tabpanel"
                    aria-labelledby="notification-tab">
                    <div class="user-sidebar-item">
                        <div class="notification-item">
                            <div class="list-group drop-reveal-list">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element flex-shrink-0 mr-3 ml-0"><i class="la la-bell"></i>
                                        </div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your request has been sent</h3>
                                            <p class="msg-text">2 min ago</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-2 flex-shrink-0 mr-3 ml-0"><i
                                                class="la la-check"></i></div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your account has been created</h3>
                                            <p class="msg-text">1 day ago</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-3 flex-shrink-0 mr-3 ml-0"><i
                                                class="la la-user"></i></div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your account updated</h3>
                                            <p class="msg-text">2 hrs ago</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-4 flex-shrink-0 mr-3 ml-0"><i
                                                class="la la-lock"></i></div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your password changed</h3>
                                            <p class="msg-text">Yesterday</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-5 flex-shrink-0 mr-3 ml-0"><i
                                                class="la la-envelope"></i></div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your email sent</h3>
                                            <p class="msg-text">Yesterday</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-6 flex-shrink-0 mr-3 ml-0"><i
                                                class="la la-envelope"></i></div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your email changed</h3>
                                            <p class="msg-text">Yesterday</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                            </div>
                        </div><!-- end notification-item -->
                    </div>
                </div>
                <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
                    <div class="user-action-wrap user-sidebar-panel">
                        <div class="notification-item">
                            <a href="user-dashboard-profile.html" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-sm flex-shrink-0 mr-2"><img
                                            src={{ asset("images/team8.jpg")}} alt="team-img"></div>
                                    <span class="font-size-14 font-weight-bold">Ali Tufan</span>
                                </div>
                            </a>
                            <div class="list-group drop-reveal-list user-drop-reveal-list">
                                <a href="user-dashboard-profile.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-user mr-2"></i>My Profile</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="user-dashboard-booking.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-shopping-cart mr-2"></i>My Booking</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="user-dashboard-reviews.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-heart mr-2"></i>My Reviews</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="user-dashboard-settings.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-gear mr-2"></i>Settings</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <div class="section-block"></div>
                                <a href="index.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-power-off mr-2"></i>Logout</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                            </div>
                        </div><!-- end notification-item -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end user-canvas-container -->
    <!-- ================================
       END USER CANVAS MENU
================================= -->

    <!-- ================================
       START DASHBOARD NAV
================================= -->
    @include('penyelenggara.layouts.sidebar')
    <!-- ================================
       END DASHBOARD NAV
================================= -->

    <!-- ================================
    START DASHBOARD AREA
================================= -->
    <section class="dashboard-area">
        @include('penyelenggara.layouts.header')
        @yield('content')
    </section><!-- end dashboard-area -->
    <!-- ================================
    END DASHBOARD AREA
================================= -->

    <!-- start scroll top -->
    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
    <!-- end scroll top -->

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
    <script src={{ asset("js/jquery.ripples-min.js") }}></script>
    <script src={{ asset("js/main.js") }}></script>
    <script type="text/javascript" src="{{ asset('DataTables/datatables.min.js') }}"></script>
    @yield('datatabel')
</body>

</html>