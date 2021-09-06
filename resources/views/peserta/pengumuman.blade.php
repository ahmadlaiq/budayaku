@extends('peserta.layouts.master')
@section('content')
<div class="dashboard-content-wrap">
    <div class="dashboard-bread dashboard--bread dashboard-bread-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title font-size-30 text-white">Pengumuman</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="index.html" class="text-white">Home</a></li>
                            <li>Dashboard</li>
                            <li>Pengumuman</li>
                        </ul>
                    </div><!-- end breadcrumb-list -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div>
    </div><!-- end dashboard-bread -->
    <div class="dashboard-main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">Pengumuman </h3>
                        </div>
                        <div class="form-content">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">Juara</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">Penyisihan</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                        aria-controls="contact" aria-selected="false">Semi Final</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <br>
                                            <h4 class="text-center">Lolos</h4>
                                            <hr>
                                            <table class="table table-sm table-striped table-bordered ">
                                                <thead>
                                                    <tr class="table-success text-center">
                                                        <th style="width:50px !important;" scope="col">No</th>
                                                        <th scope="col">Nama Karya</th>
                                                        <th scope="col">Pengirim</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no=1; ?>
                                                    @foreach(pengumuman() as $d)
                                                    @if( $d->status_juara == 1 || $d->status_juara == 2 ||
                                                    $d->status_juara == 3 )
                                                    <tr>
                                                        <th class="text-center" scope="row">{{ $no++ }}</th>
                                                        <td>{{ $d->judul_karya }}</td>
                                                        <td>{{ $d->nama_lengkap }}</td>
                                                        <td class="text-center">{{ $d->status_juara }}</td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <br>
                                            <h4 class="text-center">Lolos</h4>
                                            <hr>
                                            <table class="table table-sm table-striped table-bordered ">
                                                <thead>
                                                    <tr class="table-success text-center">
                                                        <th style="width:50px !important;" scope="col">No</th>
                                                        <th scope="col">Nama Karya</th>
                                                        <th scope="col">Pengirim</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no=1; ?>
                                                    @foreach(pengumuman() as $d)
                                                    @if( $d->status_juara == 'Penyisihan' )
                                                    <tr>
                                                        <th class="text-center" scope="row">{{ $no++ }}</th>
                                                        <td>{{ $d->judul_karya }}</td>
                                                        <td>{{ $d->nama_lengkap }}</td>
                                                        <td class="text-center">{{ $d->status_juara }}</td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <br>
                                            <h4 class="text-center">Lolos</h4>
                                            <hr>
                                            <table class="table table-sm table-striped table-bordered ">
                                                <thead>
                                                    <tr class="table-success text-center">
                                                        <th style="width:50px !important;" scope="col">No</th>
                                                        <th scope="col">Nama Karya</th>
                                                        <th scope="col">Pengirim</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no=1; ?>
                                                    @foreach(pengumuman() as $d)
                                                    @if( $d->status_juara == 'Lolos Semi Final' )
                                                    <tr>
                                                        <th class="text-center" scope="row">{{ $no++ }}</th>
                                                        <td>{{ $d->judul_karya }}</td>
                                                        <td>{{ $d->nama_lengkap }}</td>
                                                        <td class="text-center">{{ $d->status_juara }}</td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h4 class="text-center">Tidak Lolos</h4>
                            <hr>
                            <table class="table table-sm table-striped table-bordered ">
                                <thead>
                                    <tr class="table-danger text-center">
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Karya</th>
                                        <th scope="col">Pengirim</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    @foreach(pengumuman() as $d)
                                    @if( $d->status_juara == null )
                                    <tr>
                                        <th class="text-center" scope="row">{{ $no++ }}</th>
                                        <td>{{ $d->judul_karya }}</td>
                                        <td>{{ $d->nama_lengkap }}</td>
                                        <td class="text-center">{{ $d->status_juara }}</td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->

            <div class="border-top mt-5"></div>
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="copy-right padding-top-30px">
                        <p class="copy__desc">
                            © Copyright Trizen 2020. Made with
                            <span class="la la-heart"></span> by <a
                                href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                        </p>
                    </div><!-- end copy-right -->
                </div><!-- end col-lg-7 -->
                <div class="col-lg-5">
                    <div class="copy-right-content text-right padding-top-30px">
                        <ul class="social-profile">
                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="lab la-github"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                        </ul>
                    </div><!-- end copy-right-content -->
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-main-content -->
</div>
@endsection
@section('datatabel')
<script>
    $('.table').DataTable({
        "autoWidth": false
    });
</script>
@endsection