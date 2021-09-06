@extends('penyelenggara.layouts.master')
@section('content')
<div class="dashboard-content-wrap">
    <div class="dashboard-bread dashboard--bread dashboard-bread-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title font-size-30 text-white">Buat Kompetisi</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="index.html" class="text-white">Home</a></li>
                            <li>Dashboard</li>
                            <li>Buat Kompetisi</li>
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
                            <h3 class="title">Buat Kompetisi</h3>
                        </div>
                        <div class="form-content">
                            <div class="contact-form-action">
                                <form action="{{ route('penyelenggara.buatkompetisi') }}" class="MultiFile-intercepted"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Judul Kompetisi</label>
                                                <div class="form-group">
                                                    <input class="form-control" name="judul_kompetisi" type="text"
                                                        placeholder="">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Kategori Kompetisi</label>
                                                <div class="form-group">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="kategori_status" id="inlineRadio1" value="Final">
                                                        <label class="form-check-label" for="inlineRadio1">Final</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="kategori_status" id="inlineRadio2" value="Semi Final">
                                                        <label class="form-check-label" for="inlineRadio2">Semi Final</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="kategori_status" id="inlineRadio3" value="Penyisihan">
                                                        <label class="form-check-label" for="inlineRadio3">Penyisihan</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Deskirpsi Kompetisi</label>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="deskirpsi_kompetisi"
                                                        type="text" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Total Hadiah</label>
                                                <div class="form-group">
                                                    <input class="form-control" name="hadiah" type="text"
                                                        placeholder="">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Biaya Pendaftaran</label>
                                                <div class="form-group">
                                                    <input class="form-control" name="biaya_pendaftaran" type="text"
                                                        placeholder="">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Persyaratan Peserta</label>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="persyaratan_peserta"
                                                        type="text" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Tanggal Mulai Kompetisi</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input type="date" name="tgl_mulai" min="1000-01-01"
                                                        max="3000-12-31" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Tanggal Akhir Kompetisi</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input type="date" name="tgl_akhir" min="1000-01-01"
                                                        max="3000-12-31" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Poster</label>
                                                <div class="form-group">
                                                    <input class="form-control-file border" type="file" name="poster"
                                                        placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Berkas Panduan</label>
                                                <div class="form-group">
                                                    <input class="form-control-file border" type="file" name="panduan"
                                                        placeholder="">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Berkas Surat Pernyataan</label>
                                                <div class="form-group">
                                                    <input class="form-control-file border" type="file"
                                                        name="surat_pernyataan" placeholder="">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                        <div class="col-lg-12">
                                            <div class="btn-box">
                                                <button class="theme-btn" type="submit">Submit</button>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                    </div><!-- end row -->
                                </form>
                            </div>
                        </div>
                    </div>
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
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-main-content -->
</div>
@endsection