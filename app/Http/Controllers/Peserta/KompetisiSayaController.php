<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KompetisiSayaController extends Controller
{
    public function KompetisiSayaPage(){
        return view('peserta.kompetisi-saya');
    }
}
