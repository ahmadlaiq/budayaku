<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.tentang-kami');
    }

    public function kebijakan(){
        return view('home.kebijakanprivasi');
    }
}
