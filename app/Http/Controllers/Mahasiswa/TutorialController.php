<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;

class TutorialController extends Controller
{

    public function index()
    {
        return view('mahasiswa.tutorial');
    }
  
}
