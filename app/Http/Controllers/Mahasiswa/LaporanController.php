<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Laporan;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function index()
    {
        return view('mahasiswa.laporan');
    }

    public function postLaporan(Request $request)
    {
        $this->validateLaporan($request);
        //Proses upload gambar
        $image     = $request->file('gambar');
        $imageName = time()."_".$image->getClientOriginalName();
        $imgPath   = "assets/images/laporan";
        $image->move($imgPath, $imageName);

        $this->saveLaporan($request->all(), $imageName);
        
        return redirect()->back()->with(['success'=> 'Laporan Anda Telah Terkirim']);
        
    }
    
    protected function validateLaporan(Request $request)
    {
        $request->validate([
            'jenis'     => 'required|min:2',
            'barang'    => 'required|min:3',
            'gambar'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|min:10',
            'hp'        => 'required'
        ]);

    }

    protected function saveLaporan(array $data, $image = null)
    {
        return Laporan::create([
            'mahasiswa_id'   => Auth::guard()->user()->id,
            'kategori'      => $data['jenis'],
            'jenis_barang'  => $data['barang'],
            'deskripsi'     => $data['deskripsi'],
            'no_hp'         => $data['hp'],
            'gambar'        => $image,
            'status'        => 0,
        ]);
    }

}
