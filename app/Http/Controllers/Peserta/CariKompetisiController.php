<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kompetisi;

class CariKompetisiController extends Controller
{
    public function CariKompetisiPage(){
        //$kompetisi = DB::table('kompetisi');
        //return view('peserta.cari-kompetisi', ['kompetisi'=> $kompetisi]);
        
        $kompetisi = Kompetisi::paginate(10);
        return view('peserta.cari-kompetisi', compact('kompetisi'));
    }

    public function DetailCariKompetisiPage(Kompetisi $kompetisi){
        
        return view('peserta.detail-cari-kompetisi', [
            'kompetisi' => $kompetisi
        ]);
    }

}
