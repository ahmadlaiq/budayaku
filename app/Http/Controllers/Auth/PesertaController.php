<?php

namespace App\Http\Controllers\Auth;

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
use DB;

class PesertaController extends Controller
{

    /**
     * Untuk menampilkan halaman Login
     */
    public function LoginPage()
    {
        return view('auth.peserta-login');
    }    

    public function Login(Request $request)
    {
        $rules = [
            'email'                 => 'required|email',
            'password'              => 'required|string'
        ];
 
        $messages = [
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string'
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        // Proses Login
        if (Auth::guard('peserta')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            // Redirect ke halaman penyelenggara jika berhasil
            //dd(Auth::guard('peserta'));
           return redirect()->intended('/peserta/cari-kompetisi');
        }
        return redirect()->back();
    }

    public function Logout()
    {
        if (Auth::guard('peserta')->check()) {
            Auth::guard('peserta')->Logout();
        }
        return redirect()->route('peserta.login');
    }  

    protected function guard()
    {
        return Auth::guard('peserta');
    }

    public function RegisterPage(){
        return view('auth.peserta-register');
    }

    public function Register(Request $request)
    {
        $rules = [
            'nama_lengkap'          => 'required|min:3|max:35',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|confirmed'
        ];
 
        $messages = [
            'nama_lengkap.required' => 'Nama Lengkap wajib diisi.',
            'nama_lengkap.min'      => 'Nama lengkap minimal 3 karakter.',
            'nama_lengkap.max'      => 'Nama lengkap maksimal 35 karakter.',
            'email.required'        => 'Email wajib diisi.',
            'email.email'           => 'Email tidak valid.',
            'email.unique'          => 'Email sudah terdaftar.',
            'password.required'     => 'Password wajib diisi.',
            'password.confirmed'    => 'Password tidak sama dengan konfirmasi password.'
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
 
        $user = new Peserta;
        $user->nama_lengkap = ucwords(strtolower($request->nama_lengkap));
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $simpan = $user->save();

        if($simpan){
            Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses dashboard');
            return redirect()->route('peserta.login');
        }
    }
    public function update_profile(Request $request){
        $getData = DB::table('peserta')->where('id', Auth::guard('peserta')->user()->id)->first();
        $pw = isset($request->password) ?  Hash::make($request->password) : $getData->password;
        DB::table('peserta')
        ->where('id', Auth::guard('peserta')->user()->id)
        ->update([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'password' => $pw,
        ]);

        return redirect()->back();
    }
}
