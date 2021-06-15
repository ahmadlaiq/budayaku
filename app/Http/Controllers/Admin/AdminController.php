<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Repositories\AdminRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct(AdminRepository $admin)
    {
        $this->admin    = $admin;
    }

    public function index()
    {
        return view('dashboard');
    }

    public function profile()
    {
        $profiles   = $this->admin->DBSelectFirst(['nama', 'email', 'nip'], 'id', Auth::guard('admin')->user()->id);
        if (empty($profiles)) {
            return abort(404);
        } else {
            return view('admin.profile', ['admins'=> $profiles]);
        }


    }
}
