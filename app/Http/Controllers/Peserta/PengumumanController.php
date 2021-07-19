<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function PengumumanPage(){
        return view('peserta.pengumuman');
    }
}
