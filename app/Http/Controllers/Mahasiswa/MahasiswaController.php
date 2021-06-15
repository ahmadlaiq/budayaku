<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Repositories\MahasiswaRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{

    public function __construct(MahasiswaRepository $mahasiswa)
    {
        $this->mahasiswa = $mahasiswa;
    }

    public function index()
    {
        return view('dashboard');
        
    }

    public function profile()
    {
        $profiles     = $this->mahasiswa->DBSelectFirst(['nama', 'nim', 'email', 'prodi'], 'id', Auth::guard('mahasiswa')->user()->id);
        if (empty($profiles)) {
            return abort(404);
        } else {
            return view('mahasiswa.profile', ['users'=> $profiles]);
        }
    }
}
