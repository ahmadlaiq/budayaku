@extends('layout.master')
@section('title', 'riwayat')
@section('page', 'Riwayat Laporan')
@section('content')
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-body box-outline">
            <form action="" method="POST">
                
                <fieldset class="border p-2">
                    <legend style="width: inherit; padding:0 10px;border-bottom:none;">Daftar Pelapor</legend>
                    <div class="table-responsive">
                        <table class="table tabel-striped tabel-bordered table-hover" width="100%">
                          <thead style="background-color: rgba(61, 126, 248, 0.87); color: #ffff;">
                                <tr>
                                    <th>Foto</th>
                                    <th>Jenis Laporan</th>
                                    <th>Nama Barang</th>
                                    <th>Deskripsi</th>
                                    <th>No HP</th>
                                </tr>
                          </thead>
                          <tbody>
                            @foreach($laporan as $l)
                            <tr>
                                <td><img src="/assets/images/laporan/{{ $l->gambar }}" alt="" style="width:100px; height:100px; object-fit:cover; border-radius: 10px;"></td>
                                <td>{{ $l->kategori }}</td>
                                <td>{{ $l->jenis_barang }}</td>
                                <td>{{ $l->deskripsi }}</td>
                                <td>{{ $l->no_hp }}</td>
                                <td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
