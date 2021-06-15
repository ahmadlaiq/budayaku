
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UISI Lapor | @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ url('assets/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('assets/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url('assets/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('assets/plugins/datatables-bs4/css/datatables.bootstrap4.css') }}">
  <!-- jQuery -->
  <script src="{{ url('assets/plugins/jquery/jquery.min.js') }}"></script>
  <style>
      .border-menu {
        position: relative;
        width: 100%;
        min-height: 120px;
        border-radius: 1.5rem;
        background-size: cover;
        background-position: center;
        border: .5rem solid rgb(87, 74, 74);
        box-sizing: border-box;
        box-shadow: .5rem .75rem 1rem -.25rem rgba(0,0,0,0.2);
            &::before {
                content: '';
                display: block;
                border-radius: 1rem;
                position: absolute;
                left: -1rem;
                top: -1rem;
                width: 100%;
                height: 100%;
                background: inherit;
                z-index: -2;
                transition: left 200ms, top 200ms;
            }
            &::after {
                content: '';
                display: block;
                border-radius: calc(1rem - 1px);
                position: absolute;
                left: calc(-1rem + 1px);
                top: calc(-1rem + 1px);
                width: calc(100% - 2px);
                height: calc(100% - 2px);
                background: white;
                z-index: -1;
                transition: left 200ms, top 200ms;
            }
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('layout.partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layout.partials.sidebar')
  <!-- /.end Sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">@yield('page')</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <?php $segments = ''; ?>
                    @foreach(Request::segments() as $segment)
                        <?php $segments .= '/'.$segment; ?>
                        <li>
                            <a class="breadcrumb-item active" href="{{ $segments }}">{{ '/ '.ucwords(strtolower($segment)) }}</a>
                        </li>
                    @endforeach
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        {{-- <div class="row">
            @include('layout.partials.boxes')
        </div> --}}
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            @yield('content')
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layout.partials.footer')
