<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BantuanController extends Controller
{
    public function BantuanPage(){
        return view('peserta.bantuan');
    }
}
