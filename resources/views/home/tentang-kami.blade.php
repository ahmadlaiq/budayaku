@include('home.layouts.header')

<section class="breadcrumb-area bread-bg">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title line-height-50 text-white">Budayaku.net<br> Platform Kompetisi Budaya Indonesia.</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
    <div class="bread-svg-box">
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
    </div><!-- end bread-svg -->
</section>

<section class="about-area padding-bottom-90px overflow-hidden margin-top-50px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading margin-bottom-40px">
                    <h2 class="sec__title">Tentang Budayaku</h2>
                    {{-- <h4 class="title font-size-16 line-height-26 pt-4 pb-2">Since 2002, TRIZEN has been revolutionising the travel industry. Metasearch for travel? No one was doing it. Until we did.</h4> --}}
                    <p class="sec__desc font-size-16 pb-3">Budayaku merupakan sebuah website yang diharapkan dapat menjadi pusat kompetisi budaya yang berbasis online. Website ini menawarkan kemudahan bagi penyelenggara lomba dan peserta lomba. Penyelenggara lomba mendapatkan kemudahan dalam membuat kompetisi, proses pengumpulan karya, dan penilaian karya peserta.</p>
                    <p class="sec__desc font-size-16 pb-3">Sedangkan peserta dapat melihat semua kompetisi yang sedang berjalan dan berpartisipasi di dalamnya. Hasil lomba akan ditampilkan dalam laman pameran budaya.</p>
                    <p class="sec__desc font-size-16">Laman pameran budaya ini diharapkan dapat meningkatkan minat pengunjung untuk ikut berpartisipasi dalam kompetisi dan melestarikan budaya.</p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-5 ml-auto">
                <div class="image-box about-img-box">
                    <img src="{{asset('images/about.jpg')}}" alt="about-img" class="img__item img__item-1">
                    <img src="{{asset('images/logo-2.jpg')}}" alt="about-img" class="img__item img__item-2">
                </div>
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

@include('home.layouts.footer')