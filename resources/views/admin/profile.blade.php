@extends('layout.master')
@section('title', 'Profile')
@section('page', 'Profile')
@section('content')
    <div class="col-md-12">
        <!-- Profile Image -->
     <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle"
                 src="{{ url('assets/dist/img/user2-160x160.jpg') }}"
                 alt="User profile picture">
          </div>
            <h3 class="profile-username text-center">{{ strtoupper($admins->nama) }}</h3>

            <p class="text-muted text-center">Admin</p>

          <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
                <b>NIP</b> <a class="float-right">{{ $admins->nip }} </a>
            </li>
            <li class="list-group-item">
                <b>Email Address</b> <a class="float-right"> {{ $admins->email }}</a>
            </li>
            {{-- <li class="list-group-item">
                <b>Prodi</b> <a class="float-right">{{ $users->prodi }}</a>
            </li> --}}
          </ul>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
@endsection
