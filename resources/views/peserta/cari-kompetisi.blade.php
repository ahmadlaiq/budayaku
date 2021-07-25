@extends('peserta.layouts.master')
@section('content')
<div class="dashboard-content-wrap">
    <div class="dashboard-bread dashboard--bread dashboard-bread-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title font-size-30 text-white">Cari Kompetisi</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="index.html" class="text-white">Home</a></li>
                            <li>Dashboard</li>
                            <li>Cari Kompetisi</li>
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
                    <div class="filter-wrap margin-bottom-30px">
                        <div class="filter-bar d-flex align-items-center justify-content-between">
                            <div class="filter-bar-filter d-flex flex-wrap align-items-center">
                                <div class="filter-option">
                                    <h3 class="title font-size-16">Urutkan Berdasarkan:</h3>
                                </div>
                                <div class="select-contain">
                                    <div class="dropdown bootstrap-select select-contain-select"><select class="select-contain-select" tabindex="-98">
                                        <option value="1">Short by default</option>
                                        <option value="2">Popular Kompetisi</option>
                                        <option value="3">Biaya Pendaftaran: low to high</option>
                                        <option value="4">Biaya Pendaftaran: high to low</option>
                                        <option value="5">A to Z</option>
                                    </select><div class="dropdown-menu "><div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" placeholder="Search" role="combobox" aria-label="Search" aria-controls="bs-select-3" aria-autocomplete="list"></div><div class="inner show" role="listbox" id="bs-select-3" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                </div><!-- end select-contain -->
                            </div><!-- end filter-bar-filter -->
                            
                        </div><!-- end filter-bar -->
                    </div><!-- end filter-wrap -->
                </div>
            </div><!-- end row -->
            
            <div class="col-lg-12">
                @foreach ($kompetisi as $no => $data)
                <div class="card-item card-item-list">
                    <div class="card-img">
                        <a href="{{ route('peserta.detailcarikompetisi', $data->id) }}" class="d-block">
                            <img width="600" height="400" src={{ url('/poster/'.$data->poster) }} alt="hotel-img" >
                        </a>
                        <span class="badge">Sedang Berlangsung</span>
                        <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark">
                            <i class="la la-heart-o"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><a href="{{ route('peserta.detailcarikompetisi', $data->id) }}">{{ $data->judul_kompetisi }}</a></h3>
                        <p class="card-meta">150 Pengirim</p>
                        <div class="card-rating">
                            <span class="">Deadline kompetisi:</span>
                            <span class="" style="color: crimson">{{ $data->tgl_akhir }}</span>
                        </div>
                        <div class="card-price d-flex align-items-center justify-content-between">
                            <p>
                                <span class="price__text">Total Hadiah </span>
                                <span class="price__num">Rp.{{ $data->hadiah }}</span>
                                
                            </p>
                            <p>
                                <span class="price__text">Biaya Pendaftaran </span>
                                <span class="price__num">Rp.{{ $data->biaya_pendaftaran }}</span>
                                
                            </p>
                            <a href="{{ route('peserta.detailcarikompetisi', $data->id) }}" class="btn-text">Lihat detail<i class="la la-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{$kompetisi->links()}}

            <div class="border-top mt-5"></div>
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="copy-right padding-top-30px">
                        <p class="copy__desc">
                            © Copyright Trizen 2020. Made with
                            <span class="la la-heart"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
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


<!--
                
            -->