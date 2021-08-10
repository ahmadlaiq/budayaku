<!-- end cssload-loader -->

@include('home.layouts.header')

<section class="breadcrumb-area bread-bg">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title line-height-55 text-white">Mari Berkompetisi
                                <br> Menciptakan Kreasi</h2>
                            <p class="sec__desc pt-2 text-white">Budayaku mewadahi kompetisi budaya di Indonesia.<br>
                                Bergabung dengan kami, ciptakan kreasi terbaik kapanpun dan dimanapun berada.</p>
                        </div>
                        <div class="btn-box pt-4">
                            <a href="{{ route('home.pilih-daftar') }}" class="theme-btn border-0">Daftar Sekarang</a>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
    {{-- <div class="bread-svg-box">
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
    </div><!-- end bread-svg --> --}}
</section>

<section class="info-area info-bg padding-top-100px padding-bottom-60px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Bagaimana Cara Kerja Budayaku?</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-3 d-flex">
                    <div class="info-icon flex-shrink-0">
                        <i class="la la-sign-in"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Buat Akun</h4>
                        <p class="info__desc">
                            Daftarkan dirimu untuk mengikuti kompetisi.
                        </p>
                        <span class="info__num">1</span>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-3 d-flex">
                    <div class="info-icon flex-shrink-0">
                        <i class="la la-gears"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Upload Karyamu</h4>
                        <p class="info__desc">
                            Upload karya seni terbaikmu dan menangkan kompetisi.
                        </p>
                        <span class="info__num">2</span>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-3 d-flex">
                    <div class="info-icon flex-shrink-0">
                        <i class="la la-money"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Dapatkan Hadiah</h4>
                        <p class="info__desc">
                            Dapatkan hadiah menarik untuk mengembangkan kreatifitasmu.
                        </p>
                        <span class="info__num">3</span>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<section class="video-area padding-top-100px text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video-content z-index-1">
                    <div class="video-content-img ripple-bg jquery-ripples">
                        <img src="images/bg-jmb.jpg" alt="">
                        <canvas width="1170" height="487" style="position: absolute; inset: 0px; z-index: -1;"></canvas>
                    </div>
                    <div class="video-content-box">
                        <div class="section-heading">
                            <h2 class="sec__title text-white line-height-55">Bagikan Keindahan Budayamu <br> Kepada Dunia</h2>
                        </div><!-- end section-heading -->
                        <div class="btn-box pt-4">
                            <a href="#" class="icon-element text-white" data-fancybox="video"
                                data-src="https://www.youtube.com/watch?v=0GZSfBuhf6Y" data-speed="700">
                                <i class="la la-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<section class="info-area section-bg padding-top-200px padding-bottom-100px text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title">Kenapa kamu harus menggunakan
                        platform Budayaku?</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-60px">
            <div class="col-lg-4 responsive-column">
                <div class="icon-box">
                    <div class="info-icon">
                        <i class="la la-certificate"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Tersedia Banyak Kompetisi</h4>
                        <p class="info__desc">
                            Mempermudah pencari kompetisi dalam mendapatkan info dan 
                            berpartisipasi dalam kompetisi budaya.
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="icon-box">
                    <div class="info-icon">
                        <span><i class="la la-users"></i></span>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Mudah Memanajemen Kompetisi</h4>
                        <p class="info__desc">
                            Mempermudah penyelenggara kompetisi dalam membuat 
                            dan memanajemen kompetisi secara daring
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="icon-box">
                    <div class="info-icon">
                        <span><i class="la la-play-circle"></i></span>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title line-height-26">Pameran Budaya Indonesia</h4>
                        <p class="info__desc">
                            Menjadi pusat data budaya yang ada di Indonesia dengan fitur pameran budaya.
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box">
                    <a href="home/pilih-daftar" class="theme-btn">Daftar Sekarang</a>
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<section class="blog-area padding-top-30px padding-bottom-90px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title line-height-55">Rekomendasi Kompetisi</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            @foreach(rekomendasi_kompetisi() as $d)
            <div class="col-lg-4 responsive-column">
                <div class="card-item blog-card">
                    <div class="card-img">
                        <img src="{{ asset("poster/".$d->poster) }}" alt="blog-img">
                        <div class="card-body">
                            <h3 class="card-title line-height-26"><a data-toggle="modal"
                                    data-target="#exampleModalCenter{{ $d->id }}"
                                    type="button">{{$d->judul_kompetisi}}</a>
                            </h3>
                            <p class="card-meta">
                                <span class="post__date"> Total Hadiah</span>
                                <span class="post-dot"></span>
                                <span class="post__time">Rp.{{ number_format($d->hadiah,2)}}</span>
                            </p>
                            <p class="card-meta">
                                <span class="post__date"> Jumlah Peserta Terdaftar</span>
                                <span class="post-dot"></span>
                                <span class="post__time">{{ $d->total_pendaftar }} Karya</span>
                            </p>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="{{ asset("poster/".$d->poster) }}" alt="testimonial image">
                            </div>
                            <div class="author-bio">
                                <a href="#" class="author__title">Pemkab Gresik</a>
                            </div>
                        </div>
                        <div class="post-share">
                            <ul>
                                <li>
                                    <i class="la la-share icon-element"></i>
                                    <ul class="post-share-dropdown d-flex align-items-center">
                                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" id="exampleModalCenter{{ $d->id }}" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Detail Kompetisi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Judul Kompetisi</label>
                                    <h3>{{ $d->judul_kompetisi }}</h3>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Tanggal diBuka</label>
                                    <input type="email" readonly value="{{ $d->tgl_mulai }}"
                                        class="form-control text-center" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Tanggal diTutup</label>
                                    <input type="text" readonly value="{{ $d->tgl_akhir }}"
                                        class="form-control text-center" id="inputPassword4" placeholder="Password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Biaya Pendaftaran</label>
                                    <input type="email" readonly
                                        value="Rp. {{ number_format($d->biaya_pendaftaran,2) }}"
                                        class="form-control text-center" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Hadiah Kompetisi</label>
                                    <input type="text" readonly value="Rp. {{ number_format($d->hadiah,2) }}"
                                        class="form-control text-center" id="inputPassword4" placeholder="Password">
                                </div>
                                <div class="col-sm-12">
                                    <label>Deskripsi Kompetisi</label>
                                    <textarea readonly class="form-control"
                                        rows="7">{{ $d->deskirpsi_kompetisi }}</textarea>
                                </div>
                                <div class="col-sm-12">
                                    <label>Persyaratan Peserta</label>
                                    <textarea readonly class="form-control"
                                        rows="7">{{ $d->persyaratan_peserta }}</textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4">
                                    <a class="btn btn-sm btn-info" href="{{ url('download_poster/'.$d->poster) }}"><i
                                            class="fa fa-download"> Download Poster</i></a>
                                </div>
                                <div class="col-sm-4">
                                    <a class="btn btn-sm btn-info" href="{{ url('download_panduan/'.$d->panduan) }}"><i
                                            class="fa fa-download"> Download Panduan</i></a>
                                </div>
                                <div class="col-sm-4">
                                    <a class="btn btn-sm btn-info"
                                        href="{{ url('download_surat_pernyataan/'.$d->surat_pernyataan) }}"><i
                                            class="fa fa-download">
                                            Download Surat Pernyataan</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box text-center pt-4">
                    <a href="{{route('home.kompetisi')}}" class="theme-btn">Tampilkan Semua Kompetisi</a>
                </div>
            </div>
        </div>
    </div><!-- end container -->
</section>

<section class="faq-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Pertanyaan Umum</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-40px">
            <div class="col-lg-7">
                <div class="accordion accordion-item" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="faqHeadingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link d-flex align-items-center justify-content-between" type="button" data-toggle="collapse" data-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                    <span> Apakah website ini terpercaya?</span>
                                    <i class="la la-minus"></i>
                                    <i class="la la-plus"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="faqCollapseOne" class="collapse show" aria-labelledby="faqHeadingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by injected humour, or randomised words
                                    which don't look even slightly believable.</p>
                            </div>
                        </div>
                    </div><!-- end card -->
                    <div class="card">
                        <div class="card-header" id="faqHeadingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link d-flex align-items-center justify-content-between" type="button" data-toggle="collapse" data-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                    <span> Bagaimana cara mendaftar sebagai penyelenggara?</span>
                                    <i class="la la-minus"></i>
                                    <i class="la la-plus"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="faqCollapseTwo" class="collapse" aria-labelledby="faqHeadingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by injected humour, or randomised words
                                    which don't look even slightly believable.</p>
                            </div>
                        </div>
                    </div><!-- end card -->
                    <div class="card">
                        <div class="card-header" id="faqHeadingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link d-flex align-items-center justify-content-between" type="button" data-toggle="collapse" data-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                    <span> Bagaimana cara mendaftar sebagai peserta?</span>
                                    <i class="la la-minus"></i>
                                    <i class="la la-plus"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="faqCollapseThree" class="collapse" aria-labelledby="faqHeadingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by injected humour, or randomised words
                                    which don't look even slightly believable.</p>
                            </div>
                        </div>
                    </div><!-- end card -->
                    <div class="card">
                        <div class="card-header" id="faqHeadingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link d-flex align-items-center justify-content-between" type="button" data-toggle="collapse" data-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                                    <span> Adakah persyaratan khusus dalam mendaftar?</span>
                                    <i class="la la-minus"></i>
                                    <i class="la la-plus"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="faqCollapseFour" class="collapse" aria-labelledby="faqHeadingFour"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by injected humour, or randomised words
                                    which don't look even slightly believable.</p>
                            </div>
                        </div>
                    </div><!-- end card -->
                    <div class="card">
                        <div class="card-header" id="faqHeadingFive">
                            <h2 class="mb-0">
                                <button class="btn btn-link d-flex align-items-center justify-content-between" type="button" data-toggle="collapse" data-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
                                    <span> Bagaiaman proses penyerahan hadiah?</span>
                                    <i class="la la-minus"></i>
                                    <i class="la la-plus"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="faqCollapseFive" class="collapse" aria-labelledby="faqHeadingFive"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by injected humour, or randomised words
                                    which don't look even slightly believable.</p>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div>
                <div class="accordion-help-text pt-2">
                    <p class="font-size-14 font-weight-regular">Ada Pertanyaan? Silahkan kunjungi <a href="#" class="color-text">Help center</a> or <a href="#" class="color-text">Contact Us</a></p>
                </div>
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="faq-forum pl-4">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">Masih ada pertanyaan?</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content">
                            <div class="contact-form-action">
                                <form method="post">
                                    <div class="input-box">
                                        <label class="label-text">Nama Kamu</label>
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control" type="text" name="text" placeholder="Your name">
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <label class="label-text">Email</label>
                                        <div class="form-group">
                                            <span class="la la-envelope-o form-icon"></span>
                                            <input class="form-control" type="email" name="email"
                                                placeholder="Email address">
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <label class="label-text">Pesan</label>
                                        <div class="form-group">
                                            <span class="la la-pencil form-icon"></span>
                                            <textarea class="message-control form-control" name="message"
                                                placeholder="Write message"></textarea>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <button type="button" class="theme-btn">Kirim Pesan</button>
                                    </div>
                                </form>
                            </div><!-- end contact-form-action -->
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                </div><!-- end faq-forum -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<section class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-heading">
                    <p class="sec__desc text-white-50 pb-1">Dapatkan Update &amp; Info Menarik.</p>
                    <h2 class="sec__title font-size-30 text-white">Awali Kreatifitasmu Bersama Budayaku!</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="subscriber-box">
                    <div class="contact-form-action">
                        <form action="#">
                            <div class="input-box">
                                <label class="label-text text-white">Masukkan Alamat Email.</label>
                                <div class="form-group mb-0">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="email" name="email" placeholder="Email address">
                                    <button class="theme-btn theme-btn-small submit-btn" type="submit">Berlangganan</button>
                                    <span class="font-size-14 pt-1 text-white-50"><i class="la la-lock mr-1"></i>Jangan khawatir, informasimu aman bersama kami.</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>



@include('home.layouts.footer')