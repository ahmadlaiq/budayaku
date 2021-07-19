<?php

namespace App\Http\Controllers\Penyelenggara;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function PengumumanPage(){
        return view('penyelenggara.pengumuman');
    }
}
