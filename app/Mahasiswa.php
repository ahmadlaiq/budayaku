<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mahasiswa extends Authenticatable
{
    use Notifiable;

    protected $table = "mahasiswas";

    protected $guard = "mahasiswa";

    protected $primaryKey   = "id";

    protected $fillable = [
        'id', 'nama', 'email', 'password', 'nim', 'prodi', 'foto'
    ];

    protected $hidden  = [
        'password'
    ];
}
