<?php

namespace App\Repositories;
// Panggil model Mahasiswa
use App\Mahasiswa;
use Illuminate\Support\Facades\DB;

class MahasiswaRepository {

    protected $mahasiswa;

    public function __construct(Mahasiswa $mahasiswa)
    {
        $this->mahasiswa = $mahasiswa;
    }
    // Untuk mengambil data mahasiswa berdasarkan id
    public function find($id)
    {
        return $this->mahasiswa->find($id);
    }

    public function findBy($column, $data)
    {
        return $this->mahasiswa->where($column, $data)->get();
    }

    public function DBSelectFirst($select, $column, $data)
    {
        return DB::table('mahasiswas')
        ->select($select)
        ->where($column, $data)
        ->first();
    }
   
}
