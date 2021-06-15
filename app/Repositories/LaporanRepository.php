<?php

namespace App\Repositories;
use App\Laporan;
use Illuminate\Support\Facades\DB;

class LaporanRepository {

    protected $laporan;

    public function __construct(Laporan $laporan)
    {
        $this->laporan = $laporan;
    }
    // Untuk mengambil data laporan berdasarkan id
    public function find($id)
    {
        return $this->laporan->find($id);
    }

    public function findBy($column, $data)
    {
        return $this->laporan->where($column, $data)->get();
    }

    public function DBSelectFirst($select, $where)
    {
        return DB::table('laporan')
        ->select($select)
        ->where($where)
        ->first();
    }

    public function joinLaporan($where = null)
    {
        return DB::table('laporan')
               ->join('mahasiswas', 'mahasiswas.id', '=', 'laporan.mahasiswa_id')
               ->select('laporan.id',  'laporan.gambar', 'laporan.jenis_barang', 'laporan.status', 'mahasiswas.nama as pelapor')
               ->where('kategori', $where)
               ->get();
    }

    
   
}
