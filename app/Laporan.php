<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Laporan extends model
{
    use Notifiable; 

    protected $table   = "laporan";

    protected $primaryKey   = "id";

    protected $fillable  = [
        'mahasiswa_id', 'jenis_barang', 'deskripsi', 'no_hp', 'gambar', 'status', 'kategori'
    ];
}
