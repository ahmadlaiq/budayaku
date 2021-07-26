@extends('peserta.layouts.master')
@section('content')
<div class="dashboard-content-wrap">
    <div class="dashboard-bread dashboard--bread dashboard-bread-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title font-size-30 text-white">Detail Karya</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="index.html" class="text-white">Home</a></li>
                            <li>Dashboard</li>
                            <li>Detail Karya</li>
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
                            <h3 class="title">Detail Karya</h3>
                        </div>
                        <div class="form-content">
                            <div class="row">
                                <div class="col-sm-6 text-center">
                                    <div class="card">
                                        <div class="card-header">
                                            Embeded
                                        </div>
                                        <div class="card-body">
                                            {!! str_replace('width="560"','width="75%"',$data->link_youtube) !!}<br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <div class="card" style="height: 100%;">
                                        <div class="card-header">
                                            Gambar Karya
                                        </div>
                                        <div class="card-body">
                                            <img src="{{ asset("gambar_karya/".$data->gambar_karya) }}"
                                                alt="hotel-img"><br>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Judul Karya</label>
                                        <input disabled value="{{ $data->judul_karya }}" type="email"
                                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                            placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Deskripsi Karya</label>
                                        <textarea readonly class="form-control"
                                            rows="3">{{ $data->deskripsi }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <a class="btn btn-sm btn-danger" href="{{ route('peserta.kompetisisaya') }}"> Back</a>
                        </div>
                    </div><!-- end form-box -->
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
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
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