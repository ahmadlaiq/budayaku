@extends('peserta.layouts.master')
@section('content')
<div class="dashboard-content-wrap">
    <div class="dashboard-bread dashboard--bread dashboard-bread-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title font-size-30 text-white">Pemenang Kompetisi</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="index.html" class="text-white">Home</a></li>
                            <li>Dashboard</li>
                            <li>Pemenang Kompetisi</li>
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
                            <h3 class="title">{{ $kompetisi->judul_kompetisi }}</h3>
                        </div>
                        <div class="form-content">
                            <div class="card">
                                <div class="card-header text-center" style="background: #0d233f;color:white;">
                                    Pemenang
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <?php if(isset($get_juara_tiga->judul_karya)) :  ?>
                                        <div class="col-sm-4" style="margin-top:50px;">
                                            <div class="card text-center" style="border-radius:11px">
                                                <div class="card-body" style="padding:0px;height: 350px;">
                                                    <img class="img-pemenang"
                                                        src="{{ asset("gambar_karya/".$get_juara_tiga->gambar_karya ) }}"
                                                        alt="hotel-img"><br>
                                                </div>
                                                <hr>
                                                <b> {{ $get_juara_tiga->judul_karya }}</b>

                                                <div>
                                                    <img style="width: 62px;" src="{{ asset("MEDALI_3.png") }}"
                                                        alt="hotel-img">
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($get_juara_pertama->judul_karya)) :  ?>
                                        <div class="col-sm-4">
                                            <div class="card text-center" style="border-radius:11px">
                                                <div class="card-body" style="padding:0px;height: 350px;">
                                                    <img class="img-pemenang"
                                                        src="{{ asset("gambar_karya/".$get_juara_pertama->gambar_karya) }}"
                                                        alt="hotel-img"><br>
                                                </div>
                                                <hr>
                                                <b> {{ $get_juara_pertama->judul_karya }}</b>

                                                <div>
                                                    <img style="width: 62px;" src="{{ asset("MEDALI_1.png") }}"
                                                        alt="hotel-img">
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($get_juara_dua->judul_karya)) :  ?>
                                        <div class="col-sm-4" style="margin-top:50px;">
                                            <div class="card text-center" style="border-radius:11px">
                                                <div class="card-body" style="padding:0px;height: 350px;">
                                                    <img class="img-pemenang"
                                                        src="{{ asset("gambar_karya/".$get_juara_dua->gambar_karya) }}"
                                                        alt="hotel-img"><br>
                                                </div>
                                                <hr>
                                                <b> {{ $get_juara_dua->judul_karya }}</b>

                                                <div>
                                                    <img style="width: 62px;" src="{{ asset("MEDALI_2.png") }}"
                                                        alt="hotel-img">
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                        <?php endif ?>

                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="card">
                                <div class="card-header text-center" style="background: #0d233f;color:white;">
                                    Pengirim Karya Dalam {{ $kompetisi->judul_kompetisi }}
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        @foreach($karya as $d)
                                        <div class="col-sm-4" style="margin-top:50px;">
                                            <div class="card text-center" style="border-radius:11px">
                                                <div class="card-body" style="padding:0px;height: 350px;">
                                                    <img class="img-pemenang"
                                                        src="{{ asset("gambar_karya/".$d->gambar_karya) }}"
                                                        alt="hotel-img"><br>
                                                </div>
                                                <hr>
                                                <b> {{ $d->judul_karya }}</b>
                                                <br>
                                            </div>
                                        </div>
                                        @endforeach
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
                            &copy; Copyright Budayaku 2021. Made with
                            <span class="la la-heart"></span> by <a href="https://instagram.com/budayaku_net">Tim Budayaku</a>
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
@section('datatabel')
@if($cek_juara > 0)
<script>
    Swal.fire(
        'Good job!',
        'Karya anda terpilih sebagai juara!',
        'success'
    )
</script>
@else
<script>
    Swal.fire(
        'Semangat!',
        'Karya anda belum terpilih sebagai juara!',
        'error'
    )
</script>
@endif
@endsection