@extends('layout.master')
@section('title', 'Dashboard')
@section('page', 'Dashboard')
@section('content')
    <div class="col-lg-12">
        <div style="margin-left : 50px; margin-top: 50px; margin-right: 50px;">
            <h3 style="font-weight: bold;">SELAMAT DATANG DI UISI LAPOR</h3>
            <br>
            <h5>UISI Lapor adalah sebuah aplikasi yang berbasis web yang digunakan untuk melaporkan segala permasalahan kampus dengan mudah dan cepat</h5>
            <br>
                <br>
                    <br>
            @if (Auth::guard('mahasiswa')->check())
                <div class="row">

                    <div class="col-lg-3 col-6">
                        <a href="{{ route('laporan') }}">
                            <div class="border-menu ">
                                <div class="card-body">
                                        <center><span class="fas fa-comment fa-5x "></span></center>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-6">
                        <a href="{{ route('riwayat') }}">
                            <div class="border-menu ">
                                <div class="card-body">
                                        <center><span class="fas fa-history fa-5x "></span></center>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-6">
                        <a href="{{ route('tutorial') }}">
                            <div class="border-menu ">
                                <div class="card-body">
                                    <center><span class="fas fa-info-circle fa-5x "></span></center>
                                </div>
                            </div>
                        </a>
                    </div>

            @endif
            

        </div>
    </div>
@endsection
