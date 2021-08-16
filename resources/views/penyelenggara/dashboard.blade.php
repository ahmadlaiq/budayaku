@extends('penyelenggara.layouts.master')
@section('content')
<div class="dashboard-content-wrap">
    <div class="dashboard-bread dashboard-bread-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title font-size-30 text-white">Dashboard</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="index.html" class="text-white">Home</a></li>
                            <li>Dashboard</li>
                            <li>Dashboard</li>
                        </ul>
                    </div><!-- end breadcrumb-list -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
            <div class="row mt-4">
                <div class="col-lg-6 responsive-column-l">
                    <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                        <div class="d-flex pb-3 justify-content-between">
                            <div class="info-content">
                                <p class="info__desc">Total Kompetisi Berlangsung</p>
                                <h4 class="info__title">{{ kompetisi_berlangsung()->total }} Kompetisi</h4>
                            </div><!-- end info-content -->
                            <div class="info-icon icon-element bg-4">
                                <i class="la la-dashboard mr-2"></i>
                            </div><!-- end info-icon-->
                        </div>
                        <!-- <div class="section-block"></div>
                        <a href="admin-dashboard-booking.html"
                            class="d-flex align-items-center justify-content-between view-all">View All <i
                                class="la la-angle-right"></i></a> -->
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-6 responsive-column-l">
                    <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                        <div class="d-flex pb-3 justify-content-between">
                            <div class="info-content">
                                <p class="info__desc">Total Kompetisi Berakhir</p>
                                <h4 class="info__title">{{ kompetisi_berakhir()->total }} Kompetisi</h4>
                            </div><!-- end info-content -->
                            <div class="info-icon icon-element bg-3">
                                <i class="la la-star"></i>
                            </div><!-- end info-icon-->
                        </div>
                        <!-- <div class="section-block"></div>
                        <a href="admin-dashboard-reviews.html"
                            class="d-flex align-items-center justify-content-between view-all">View All <i
                                class="la la-angle-right"></i></a> -->
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-6 responsive-column-l">
                    <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                        <div class="d-flex pb-3 justify-content-between">
                            <div class="info-content">
                                <p class="info__desc">Total Semua Karya</p>
                                <h4 class="info__title">{{ karya_kompetisi()->total }} Karya</h4>
                            </div><!-- end info-content -->
                            <div class="info-icon icon-element bg-2">
                                <i class="la la-envelope"></i>
                            </div><!-- end info-icon-->
                        </div>
                        <!-- <div class="section-block"></div>
                        <a href="admin-dashboard-subscribers.html"
                            class="d-flex align-items-center justify-content-between view-all">View All <i
                                class="la la-angle-right"></i></a> -->
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-6 responsive-column-l">
                    <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                        <div class="d-flex pb-3 justify-content-between">
                            <div class="info-content">
                                <p class="info__desc">Total Karya Mingguan</p>
                                <h4 class="info__title">{{ kompetisi_mingguan()->total }} Karya</h4>
                            </div><!-- end info-content -->
                            <div class="info-icon icon-element bg-1">
                                <i class="la la-bookmark-o"></i>
                            </div><!-- end info-icon-->
                        </div>
                        <!-- <div class="section-block"></div>
                        <a href="admin-dashboard-wishlist.html"
                            class="d-flex align-items-center justify-content-between view-all">View All <i
                                class="la la-angle-right"></i></a> -->
                    </div>
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
        </div>
    </div><!-- end dashboard-bread -->
    @endsection