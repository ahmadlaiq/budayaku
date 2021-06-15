<?php

namespace App\Http\Controllers\Mahasiswa;
use App\Laporan;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RiwayatController extends Controller
{

    public function index()
    {
        $laporan = laporan::where('status','1')->get();
        return view('mahasiswa.riwayat', compact('laporan'));
    }
  
}
