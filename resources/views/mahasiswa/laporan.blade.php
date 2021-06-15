@extends('layout.master')
@section('title', 'Laporan')
@section('page', 'Laporan')
@section('content')
    <div class="col-md-12">
        <div class="card card-primary card-outline">
            <div class="card-body box-outline">
                @if ($msg = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ $msg }}</strong>
                    </div>
                @endif 
                <form action="/mahasiswa/laporan" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="">Jenis Laporan</label>
                        </div>
                        <div class="col-md-8">
                            <select name="jenis" id="" class="form-control  @error('jenis') is-invalid @enderror">
                                <option value="LKB">Laporan Kehilangan Barang</option> 
                                <option value="LFK">Laporan Fasilitas Kampus</option>
                                <option value="LPB">Laporan Penemuan Barang</option>
                            </select>
                            @error('jenis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <fieldset class="border p-2" style="margin-bottom: 10px; padding: 0 5px;">
                        <legend style="width: inherit; padding:0 10px;border-bottom:none;">Keterangan</legend>
                        <div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="">Nama Pelapor</label>
                                </div>
                                <div class="col-md-8">
                                    <h5>{{ Auth::guard()->user()->nama }}</h5>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="">Nama Barang</label> 
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control  @error('barang') is-invalid @enderror" name="barang">
                                    @error('barang')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="">No Hp</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" class="form-control @error('hp') is-invalid @enderror" name="hp" value="{{ old('hp') }}">
                                    @error('hp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="">Gambar</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="file" class="form-control-file @error('gambar') is-invalid @enderror" name="gambar" value="{{ old('gambar') }}">
                                    @error('gambar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control @error('deskripsi') is-invalid @enderror"></textarea>
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </fieldset>
                        <div class="form-group">
                            <a href="/" class="btn btn-default float-left">Kembali</a>
                            <button class="btn btn-primary float-right">Buat Laporan</button>
                        </div>      
                </form>
            </div>
        </div>
    </div>
@endsection
