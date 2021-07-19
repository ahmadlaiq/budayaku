<?php

namespace App\Http\Controllers\Penyelenggara;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function DashboardPage(){
        return view('penyelenggara.dashboard');
    }
}
