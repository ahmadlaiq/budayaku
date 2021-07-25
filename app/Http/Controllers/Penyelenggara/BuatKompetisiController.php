<?php

namespace App\Http\Controllers\Penyelenggara;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kompetisi;
use Illuminate\Support\Facades\Auth;

class BuatKompetisiController extends Controller
{
    public function BuatKompetisiPage(){
        return view('penyelenggara.buat-kompetisi');
    }

    public function BuatKompetisi(Request $request)
    { 		
        $panduan     = $request->file('panduan');
        $panduanName = time()."_".$panduan->getClientOriginalName();
        $panduanPath   = "panduan";
        $panduan->move($panduanPath, $panduanName);

        $poster     = $request->file('poster');
        $posterName = time()."_".$poster->getClientOriginalName();
        $posterPath   = "poster";
        $poster->move($posterPath, $posterName);

        $surat_pernyataan     = $request->file('surat_pernyataan');
        $surat_pernyataanName = time()."_".$surat_pernyataan->getClientOriginalName();
        $surat_pernyataanPath   = "surat_pernyataan";
        $surat_pernyataan->move($surat_pernyataanPath, $surat_pernyataanName);

        $this->saveKompetisi($request->all(), $panduanName, $surat_pernyataanName, $posterName);

        //return dd(Auth::guard('penyelenggara'));
    	return redirect()->route('penyelenggara.dashboard');
    }

    protected function saveKompetisi(array $data, $panduan = null, $surat_pernyataan = null, $poster = null)
    {
        return Kompetisi::create([
            'judul_kompetisi'      => $data['judul_kompetisi'],
            'deskirpsi_kompetisi'  => $data['deskirpsi_kompetisi'],
            'hadiah'               => $data['hadiah'],
            'persyaratan_peserta'  => $data['persyaratan_peserta'],
            'biaya_pendaftaran'    => $data['biaya_pendaftaran'],
            'tgl_mulai'            => $data['tgl_mulai'],
            'tgl_akhir'            => $data['tgl_akhir'],
            'panduan'              => $panduan,
            'surat_pernyataan'     => $surat_pernyataan,
            'poster'               => $poster,
            'penyelenggara_id'     => Auth::guard('penyelenggara')->user()->id
        ]);
    }
}