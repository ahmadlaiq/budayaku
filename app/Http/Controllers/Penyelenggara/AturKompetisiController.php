<?php

namespace App\Http\Controllers\Penyelenggara;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AturKompetisiController extends Controller
{
    public function AturKompetisiPage(){
        return view('penyelenggara.atur-kompetisi');
    }
}
