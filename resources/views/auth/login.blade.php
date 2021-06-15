@extends('auth.include.app')
@section('title', 'Login')
@section('form')
    <form action="/login" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <button class="btn btn-block" style="heigth: 50%; border-radius: 10px; background-color: #6d98ba; color: #fff;">Masuk dengan Email UISI</button>
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
                autofocus
            />
            @error('email')
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
            <button class="btn float-right" style="width: 50%; border-radius: 30px; background-color: #6d98ba; color: #fff;">Sign In</button>
        </div>
    </form>
@endsection
