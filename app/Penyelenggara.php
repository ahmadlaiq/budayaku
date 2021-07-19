<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Penyelenggara extends Authenticatable
{
    use Notifiable;

    protected $table = 'penyelenggara';

    protected $guard = 'penyelenggara';

    protected $primaryKey   = "id";

    protected $fillable = [
        'id', 'nama_lengkap', 'email', 'password', 'no_telepon', 'alamat', 'asal_instansi'
    ];

    protected $hidden   = [
        'password'
    ];

}
