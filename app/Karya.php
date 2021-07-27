<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Karya extends model
{
    use Notifiable; 

    protected $table = 'karya';
    protected $primaryKey   = "id";
    protected $fillable = ['id','gambar_karya','judul_karya','link_youtube','deskripsi','berkas_pendaftaran','status','peserta_id','kompetisi_id','bukti_pembayaran'];

}
