<?php

namespace App\Http\Controllers\Penyelenggara;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function PengaturanPage(){
        return view('penyelenggara.pengaturan');
    }
}
