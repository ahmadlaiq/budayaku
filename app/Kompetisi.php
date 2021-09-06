<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Kompetisi extends model
{
    use Notifiable; 

    protected $table = 'kompetisi';
    protected $primaryKey   = "id";
    protected $fillable = ['id','judul_kompetisi','deskirpsi_kompetisi','hadiah','persyaratan_peserta','biaya_pendaftaran','tgl_mulai','tgl_akhir','poster','panduan','surat_pernyataan','status','penyelenggara_id','kategori_status'];

}
