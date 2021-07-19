<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Peserta extends Authenticatable
{
    use Notifiable;

    protected $table = "peserta";

    protected $guard = "peserta";

    protected $primaryKey   = "id";

    protected $fillable = [
        'id', 'nama_lengkap', 'email', 'password', 'no_telepon', 'alamat'
    ];

    protected $hidden  = [
        'password'
    ];
}
