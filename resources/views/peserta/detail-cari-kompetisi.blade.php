@extends('peserta.layouts.master')
@section('content')
<div class="dashboard-content-wrap">
    <div class="dashboard-bread dashboard--bread dashboard-bread-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title font-size-30 text-white">Detail Cari Kompetisi</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="index.html" class="text-white">Home</a></li>
                            <li>Dashboard</li>
                            <li>Detail Cari Kompetisi</li>
                        </ul>
                    </div><!-- end breadcrumb-list -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div>
    </div><!-- end dashboard-bread -->
    <div class="dashboard-main-content">
        
            
            <section class="car-detail-area padding-bottom-90px">
                <div class="single-content-navbar-wrap menu section-bg" id="single-content-navbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-content-nav" id="single-content-nav">
                                    <ul>
                                        <li><a data-scroll="description" href="#description" class="scroll-link active">Detail</a></li>
                                        <li><a data-scroll="faq" href="#faq" class="scroll-link">Persyaratan Peserta</a></li>
                                        <li><a data-scroll="reviews" href="#reviews" class="scroll-link">Kirim Karya</a></li>
                                        <li><a data-scroll="panduan" href="#panduan" class="scroll-link">Panduan Peserta</a></li>
                                        
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end single-content-navbar-wrap -->
                <div class="single-content-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="single-content-wrap padding-top-60px">
                                    <div id="description" class="page-scroll">
                                        <div class="single-content-item pb-4">
                                            <h3 class="title font-size-26">{{ $kompetisi->judul_kompetisi }}</h3>
                                            <div class="d-flex align-items-center pt-2">
                                                <p class="card-meta">{{ getTotalPeserta($kompetisi->id) }} Pengirim</p>
                                            </div>
                                        </div><!-- end single-content-item -->
                                        <div class="section-block"></div>
                                        <div class="single-content-item py-4">
                                            <div class="row">
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="single-feature-titles mb-3">
                                                        <h3 class="title font-size-16">Kategori Kompetisi</h3>
                                                        <span class="font-size-13">{{ $kompetisi->kategori_status }}</span>
                                                    </div>
                                                    <div class="single-feature-titles mb-3">
                                                        <h3 class="title font-size-16">Total Hadiah</h3>
                                                        <span class="font-size-13">Rp.{{ number_format($kompetisi->hadiah,2) }}</span>
                                                    </div>
                                                    <div class="section-block"></div>
                                                    <div class="single-feature-titles my-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Biaya Pendaftaran</h3>
                                                        <span class="font-size-13">Rp.{{ number_format($kompetisi->biaya_pendaftaran,2) }}</span>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="single-feature-titles mb-3">
                                                        <h3 class="title font-size-16">Tanggal Mulai</h3>
                                                        <span class="font-size-13">{{ date('d F Y', strtotime($kompetisi->tgl_mulai)) }}</span>
                                                    </div>
                                                    <div class="section-block"></div>
                                                    <div class="single-feature-titles my-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Tanggal Akhir</h3>
                                                        <span class="font-size-13">{{ date('d F Y', strtotime($kompetisi->tgl_akhir)) }}</span>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-12">
                                                    <div class="section-block margin-bottom-35px"></div>
                                                </div><!-- end col-lg-12 -->
                                                
                                            </div><!-- end row -->
                                        </div><!-- end single-content-item -->
                                        <div class="section-block"></div>
                                        <div class="single-content-item padding-top-40px padding-bottom-40px">
                                            <h3 class="title font-size-20">Deskripsi Kompetisi</h3>
                                            <textarea style=" background: transparent; border: none;" readonly rows="30" class="form-control">{!! $kompetisi->deskirpsi_kompetisi !!}</textarea>
                                        </div><!-- end single-content-item -->
                                        <div class="section-block"></div>
                                    </div><!-- end description -->
                                    <div id="faq" class="page-scroll">
                                        <div class="single-content-item padding-top-40px padding-bottom-40px">
                                            <h3 class="title font-size-20">Persyaratan Peserta</h3>
                                            <textarea  style=" background: transparent; border: none;" readonly rows="10" class="form-control">{!! $kompetisi->persyaratan_peserta !!}</textarea>
                                        </div><!-- end single-content-item -->
                                        <div class="section-block"></div>
                                    </div><!-- end faq -->
                                    <div id="panduan" class="page-scroll">
                                        <div class="single-content-item padding-top-40px padding-bottom-40px">
                                            <h3 class="title font-size-20">Panduan Peserta</h3>
                                            <p class="py-3"><a href="{{ url('download_panduan/'.$kompetisi->panduan) }}" class="theme-btn theme-btn-small theme-btn-transparent" type="button"><i class="la la-download mr-1"></i> Unduh Panduan</a></p>
                                        </div><!-- end single-content-item -->
                                        <div class="section-block"></div>
                                    </div><!-- end faq -->
                                    <div id="reviews" class="page-scroll">
                                        <div class="single-content-item padding-top-40px">
                                            <h3 class="title font-size-20">Kirim Karya</h3>
                                        </div><!-- end single-content-item -->
                                        <div class="section-block"></div>
                                    </div><!-- end reviews -->
                                    <div class="review-box">
                                            <div class="comment-forum padding-top-30px">
                                                <div class="form-box">
                                                    <div class="form-content">
                                                        <div class="contact-form-action">
                                                            <form action="{{ route('peserta.kirimkarya') }}" class="MultiFile-intercepted" method="POST"  enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-lg-12 responsive-column">
                                                                        <div class="input-box">
                                                                            <label class="label-text">Thumbnail</label>
                                                                            <div class="form-group">
                                                                                <input class="form-control-file border" hidden type="text" value="{{ $kompetisi->id }}" name="kompetisi_id" placeholder="">
                                                                                <input class="form-control-file border" type="file" name="gambar_karya" placeholder="">

                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-12 -->
                                                                    <div class="col-lg-12 responsive-column">
                                                                        <div class="input-box">
                                                                            <label class="label-text">Judul Karya</label>
                                                                            <div class="form-group">
                                                                                <input class="form-control" name="judul_karya" type="text" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 responsive-column">
                                                                        <div class="input-box">
                                                                            <label class="label-text">Link Karya (Youtube, Imgur, etc.)</label>
                                                                            <div class="form-group">
                                                                                <input class="form-control" name="link_youtube" type="text" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div>      
                                                                    <div class="col-lg-12 responsive-column">
                                                                        <div class="input-box">
                                                                            <label class="label-text">Deskirpsi Karya</label>
                                                                            <div class="form-group">
                                                                                <textarea class="form-control" name="deskripsi" type="text" rows="5"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-12 -->
                                                                    <div class="col-lg-12 responsive-column">
                                                                        <div class="input-box">
                                                                            <label class="label-text">Berkas Pendaftaran</label>
                                                                            <div class="form-group">
                                                                                <input class="form-control-file border" type="file" name="berkas_pendaftaran" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-12 -->
                                                                    <div class="col-lg-12 responsive-column">
                                                                        <div class="input-box">
                                                                            <label class="label-text">Bukti Pembayaran</label>
                                                                            <div class="form-group">
                                                                                <input class="form-control-file border" type="file" name="bukti_pembayaran" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-12 -->
                                                                    <div class="col-lg-12">
                                                                        <div class="btn-box">
                                                                            <button type="submit" class="theme-btn">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div><!-- end contact-form-action -->
                                                    </div><!-- end form-content -->
                                                </div><!-- end form-box -->
                                            </div><!-- end comment-forum -->
                                    </div><!-- end review-box -->
                                </div><!-- end single-content-wrap -->
                            </div><!-- end col-lg-8 -->
                            <div class="col-lg-3">
                                
                                    
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end single-content-box -->
            </section>
            

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
@section('datatabel')
<script></script>
@endsection


<!--
                
            -->