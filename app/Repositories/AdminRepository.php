<?php

namespace App\Repositories;

use App\Admin;
use Illuminate\Support\Facades\DB;

class AdminRepository {

    protected $admin;

    public function __construct(Admin $admin)
    {
        $this->admin    = $admin;
    }

    public function find($id)
    {
        return $this->admin->find($id);
    }

    public function findBy($column, $data)
    {
        return $this->admin->where($column, $data)->get();
    }

    public function DBSelectFirst($select, $column, $data)
    {
        return DB::table('admins')
        ->select($select)
        ->where($column, $data)
        ->first();
    }

    

}
