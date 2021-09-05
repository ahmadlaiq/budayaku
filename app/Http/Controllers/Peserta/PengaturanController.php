<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use App\Peserta;
use Facade\FlareClient\Http\Response;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Session;
use Illuminate\Support\Facades\DB;


class PengaturanController extends Controller
{
    public function PengaturanPage(){
        $data = DB::table('peserta')->get();
        return view('peserta.pengaturan', ['data'=> $data]);
    }

    public function Setting(Request $request, $id)
    {
    $peserta = Peserta::find($id);
    $peserta->nama_lengkap = $request->nama_lengkap;
    $peserta->email = $request->email;
    $peserta->password = Hash::make($request->password);
    $peserta->no_telepon = $request->no_telepon;
    $peserta->alamat = $request->alamat;
    // return dd($varians);
    $peserta->save();
    return redirect()->back()->with('message', 'Data berhasil update!');
    }
}
