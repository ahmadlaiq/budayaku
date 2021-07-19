<?php

namespace App\Http\Controllers\Penyelenggara;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BantuanController extends Controller
{
    public function BantuanPage(){
        return view('penyelenggara.bantuan');
    }
}
