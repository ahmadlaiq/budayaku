<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kompetisi;
use App\Karya;
use Illuminate\Support\Facades\Auth;

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

    public function KirimKarya(Request $request)
    { 		
        $gambar_karya    = $request->file('gambar_karya');
        $gambar_karyaName = time()."_".$gambar_karya->getClientOriginalName();
        $gambar_karyaPath   = "gambar_karya";
        $gambar_karya->move($gambar_karyaPath, $gambar_karyaName);
        
        $berkas_pendaftaran    = $request->file('berkas_pendaftaran');
        $berkas_pendaftaranName = time()."_".$berkas_pendaftaran->getClientOriginalName();
        $berkas_pendaftaranPath   = "berkas_pendaftaran";
        $berkas_pendaftaran->move($berkas_pendaftaranPath, $berkas_pendaftaranName);

        $this->saveKarya($request->all(), $berkas_pendaftaranName, $gambar_karyaName);

        //return dd(Auth::guard('penyelenggara'));
    	return redirect()->route('peserta.dashboard');
    }
    
    protected function saveKarya(array $data, $berkas_pendaftaran = null, $gambar_karyaName = null)
    {
        if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
        $date = date_create(now());
        return Karya::create([
            'judul_karya'          => $data['judul_karya'],
            'link_youtube'         => $data['link_youtube'],
            'deskripsi'            => $data['deskripsi'],
            'gambar_karya'         => $gambar_karyaName,
            'berkas_pendaftaran'   => $berkas_pendaftaran,
            'peserta_id'           => Auth::guard('peserta')->user()->id,
            'kompetisi_id'         => $data['kompetisi_id'],
            'created_at'            => $date
        ]);
    }

    public function read_all(){
        DB::table('karya')->where('peserta_id', Auth::user()->id)->update([
            'status' => '1'
        ]);
        return redirect()->back();
    }
    public function read_all_penyelenggara(){
        $id = Auth::guard('penyelenggara')->user()->id;
        DB::table('karya')->leftjoin('kompetisi','kompetisi.id', 'karya.kompetisi_id')->where('kompetisi.penyelenggara_id', $id)->where('karya.status','!=','2')->update([
            'karya.status' => 2
        ]);
        return redirect()->back();
    }
}
