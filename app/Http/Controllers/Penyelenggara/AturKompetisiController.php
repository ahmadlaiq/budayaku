<?php

namespace App\Http\Controllers\Penyelenggara;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;

class AturKompetisiController extends Controller
{
    public function AturKompetisiPage(Request $request){
        if($request->ajax()){
            $order_by = $request->ordering_by;
            $sql = "select * from kompetisi";
            if($order_by == '1'){
                $sql .= '';
            }elseif($order_by == '2'){
                $sql .= " ORDER BY biaya_pendaftaran ASC";
            }elseif($order_by == '3'){
                $sql .= " ORDER BY biaya_pendaftaran DESC";
            }elseif($order_by == '4'){
                $sql .= " ORDER BY judul_kompetisi ASC";
            }else{
                $sql .= " ORDER BY tgl_mulai ASC";
            }
            $data = DB::select($sql);
            return Datatables::of($data)
            ->addColumn('status_kompetisi', function($row){
                if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
                $date = now();
                $status = '';
                if( $row->tgl_akhir < $date){
                    $status = ' <span style="background:red" class="badge badge-danger">Berakhir</span>';
                }else{
                    $status = ' <span class="badge ">Sedang Berlangsung</span>';
                }
                return $status;
            })
            ->addColumn('tgl_akhir', function($row){
                return date('d F Y', strtotime($row->tgl_akhir));
            })
            ->addColumn('tgl_mulai', function($row){
                return date('d F Y', strtotime($row->tgl_mulai));
            })
            ->addColumn('hadiah', function($row){
                return number_format($row->hadiah,2);
            })
            ->addColumn('biaya_pendaftaran', function($row){
                return number_format($row->biaya_pendaftaran,2);
            })
            ->rawColumns(['tgl_akhir','hadiah','tgl_mulai','biaya_pendaftaran','status_kompetisi'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('penyelenggara.atur-kompetisi');
    }
    public function download_poster($file_name) {
        $file_path = public_path('poster/'.$file_name);
        return response()->download($file_path);
    }
    public function download_surat_pernyataan($file_name) {
        $file_path = public_path('surat_pernyataan/'.$file_name);
        return response()->download($file_path);
    }
    public function panduan($file_name) {
        $file_path = public_path('panduan/'.$file_name);
        return response()->download($file_path);
    }
}
