<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mahasiswa;
use Facade\FlareClient\Http\Response;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    /**
     * Untuk menampilkan halaman Login
     */
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        // Validasi input form login
        $this->validateLogin($request);
        // Proses Login
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
        {

            // Redirect ke halaman admin jika berhasil
            return redirect()->intended('/admin/dashboard');

        }
        else if (Auth::guard('mahasiswa')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            // Redirect ke halaman Mahasiwa jika berhasil
            return redirect()->intended('/mahasiswa/dashboard');
        }
        return $this->sendFailedLoginResponse($request);
    }

    public function getRegister()
    {

        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        // Validation Register Mahasiswa
        $this->validatorRegister($request->all())->validate();
        event(new Registered($user = $this->createRegister($request->all())));


        // Guard Login
        $this->guard()->login($user);

        return redirect('/register');

    }

    public function logout()
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } elseif (Auth::guard('mahasiswa')->check()) {
            Auth::guard('mahasiswa')->logout();
        }
        return redirect('/');

    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    protected function username()
    {
        return 'email';
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

    }

    protected function validatorRegister(array $data)
    {
        return Validator::make($data, [
            'nama'      => ['required', 'string', 'min:5', 'max:40'],
            'email'     => ['required', 'string', 'email', 'max:50', 'unique:mahasiswas'],
            'nim'       => ['required', 'integer', 'digits_between:10,10', 'unique:mahasiswas'],
            'password'  => ['required', 'string', 'min:8'],
            'prodi'     => ['required', 'string']
        ]);
    }

    protected function createRegister(array $data)
    {
        return Mahasiswa::create([
            'nama'      => $data['nama'],
            'email'     => $data['email'],
            'password'  => Hash::make($data['password']),
            'prodi'     => $data['prodi'],
            'nim'       => $data['nim']
        ]);
    }

    protected function guard()
    {
        return Auth::guard('mahasiswa');
    }
}
