<?php

namespace App\Http\Controllers\Penyelenggara;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
class PengumumanController extends Controller
{
    public function PengumumanPage(Request $request)
    {
        if($request->ajax()){
            $id_p = session_penyelenggara()->id;
            $sql = "SELECT max(tb.judul_kompetisi) as judul_kompetisi ,CONCAT( '[', GROUP_CONCAT( json_object( 'judul_karya', ta.judul_karya, 'nama_lengkap', tc.nama_lengkap, 'status_juara', ta.status_juara )), ']' ) AS data_juara  FROM karya ta LEFT JOIN kompetisi tb ON ta.kompetisi_id = tb.id LEFT JOIN peserta tc ON ta.peserta_id = tc.id WHERE ta.status_juara IS NOT NULL AND tb.penyelenggara_id = '$id_p' GROUP BY tb.id ";
            $data = DB::select($sql);
             return Datatables::of($data)
             ->addColumn('detail_juara', function($row){
                 return json_decode($row->data_juara);
             })
             ->addColumn('action', function($row){
                 $btn = '';
                 $btn = ' <a href="" class="btn btn-info btn-sm">Detail</a>';
                 return  $btn;
             })
             ->rawColumns(['action','detail_juara'])
             ->addIndexColumn()
             ->make(true);
        }
        return view('penyelenggara.pengumuman');
    }
}
