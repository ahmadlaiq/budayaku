<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function PengaturanPage(){
        return view('peserta.pengaturan');
    }
}
