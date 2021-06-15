<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table   = "admins";

    protected $guard    = "admin";

    protected $primaryKey   = "id";

    protected $fillable  = [
        'id', 'nama', 'email', 'password', 'nip'
    ];

    protected $hidden   = [
        'password'
    ];
}
