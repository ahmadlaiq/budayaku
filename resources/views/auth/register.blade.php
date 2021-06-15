@extends('auth.include.app')
@section('title', 'Register')
@section('form')
    <form action="/register" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <input
                id="nama"
                type="text"
                class="form-control @error('nama') is-invalid @enderror"
                name="nama"
                value="{{ old('nama') }}"
                style="border-radius: 30px;"
                placeholder="Full Name"
                autofocus
                >
            @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <input
                id="nim"
                type="number"
                class="form-control @error('nim') is-invalid @enderror"
                name="nim"
                value="{{ old('nim') }}"
                style="border-radius: 30px;"
                placeholder="NIM"
                >
            @error('nim')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <input
                id="email"
                type="email"
                class="form-control @error('email') is-invalid @enderror"
                name="email"
                value="{{ old('email') }}"
                style="border-radius: 30px;"
                placeholder="Email Address"
                autocomplete="email"
            />
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <select name="prodi" id="prodi"  class="form-control @error('prodi') is-invalid @enderror" style="border-radius: 30px;">
                <option value="">Pilih prodi..</option>
                <option value="Ekonomi Syariah">Ekonomi Syariah</option>
                <option value="Manajemen">Manajemen</option>
                <option value="IManajemen Rekayasa">Manajemen Rekayasa</option>
                <option value="Akutansi">Akutansi</option>
                <option value="Informatika">Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="DKV">DKV</option>
                <option value="Teknik Logistik">Teknik Logistik</option>
                <option value="eknik Kimia<">Teknik Kimia</option>
                <option value="Teknologi Industri Pertanian">Teknologi Industri Pertanian</option>
            </select>
            @error('prodi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" style="border-radius: 30px;" placeholder="Password" autocomplete="email" autofocus />
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <button class="btn float-right" style="width: 50%; border-radius: 30px; background-color: #6d98ba; color: #fff;">Sign Up</button>
        </div>
    </form>
@endsection
