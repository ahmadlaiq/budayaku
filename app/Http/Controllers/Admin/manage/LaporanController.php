<?php

namespace App\Http\Controllers\Admin\manage;

use App\Http\Controllers\Controller;
use App\Repositories\LaporanRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Laporan;
use Symfony\Component\Console\Input\Input;

class LaporanController extends Controller
{
    public function __construct(LaporanRepository $laporan)
    {
        $this->laporan = $laporan;
    }
    public function index()
    {
        return view('admin.manage.laporan');
    }

    public function json($kategory = null)
    {
        $getData      = $this->laporan->joinLaporan($kategory);
        $no           = 1;
        $data         = array();
        // logika mane, tolakbhs inggrise opo?sek aku gak pinter inggris hahaha, decline jare gugel translate :v, wkwk jos ancen
        foreach ($getData as $rows) {

            switch ($rows->status) {
                case '0':
                    $status = '<span class="badge badge-warning">NEED REVIEW</span>';
                    $button =  '<a href="javascript:void(0)" onclick="onView('.$rows->id.')" class="btn btn-primary"><span class="fa fa-list-alt"></span> Detail</a> | <a href="javascript:void(0)" onclick="onApproved('.$rows->id.')" class="btn btn-success"><span class="fa fa-check-circle "></span> Setujui</a> | <a href="javascript:void(0)" onclick="onDeclined('.$rows->id.')" class="btn btn-danger"><span class="fa fa-times-circle"></span> Tolak</a>';
                    break;
                case '1':
                    $status = '<span class="badge badge-success">DISETUJUI</span>';
                    $button = '<a href="javascript:void(0)" onclick="onView('.$rows->id.')" class="btn btn-primary"><span class="fa fa-list-alt"></span> Detail</a>  | <a href="javascript:void(0)" onclick="onDeclined('.$rows->id.')" class="btn btn-danger"><span class="fa fa-times-circle"></span> Tolak</a>';
                    break;
                case '2':
                    $status = '<span class="badge badge-danger">DITOLAK</span>';
                    $button = '<a href="javascript:void(0)" onclick="onView('.$rows->id.')" class="btn btn-primary"><span class="fa fa-list-alt"></span> Detail</a>  | <a href="javascript:void(0)" onclick="onApproved('.$rows->id.')" class="btn btn-success"><span class="fa fa-check-circle "></span> Setujui</a>';
                    break;
                default:
                    $status = '<span class="badge badge-warning">NEED REVIEW</span>';
                    $button =  '<a href="javascript:void(0)" onclick="onView('.$rows->id.')" class="btn btn-primary"><span class="fa fa-list-alt"></span> Detail</a> | <a href="javascript:void(0)" onclick="onApproved('.$rows->id.')" class="btn btn-success"><span class="fa fa-check-circle "></span> Setujui</a> | <a href="javascript:void(0)" onclick="onDeclined('.$rows->id.')" class="btn btn-danger"><span class="fa fa-times-circle"></span> Tolak</a>';
                    break;
            }

            $data[] = array(
                'no'        => $no,
                'img'       => '<img src="'.URL::to('/assets/images/laporan/'. $rows->gambar).'" height="70px" width="70px" />',
                'barang'    => $rows->jenis_barang,
                'pelapor'   => $rows->pelapor,
                'status'    => $status,
                'aksi'      => $button
            );

            $no++;
        }

        $obj    = array(
            "data"  => $data
        );

        echo json_encode($obj);
    }

    public function onView(int $id = null)
    {
        $data           = $this->laporan->find($id);
        $dateTime       = $data->created_at->toDateTimeString();
        $data['tgl']    = $dateTime;
        echo json_encode($data);
    }

    public function onApproved(Request $request)
    {
        $id             = $request->input('id');

        $updateStatus   = DB::table('laporan')
                          ->where('id', $id)
                          ->update(['status'=> 1]);

        if ($updateStatus) {
            $alert  = array('status'=> true, 'msg'=> 'Laporan disetujui');
        } else {
            $alert  = array('status'=> false, 'msg' => 'Gagal disetujui');
        }

        echo json_encode($alert);
    }

    public function onDeclined(Request $request)
    {
        $id             = $request->input('id');

        $updateStatus   = DB::table('laporan')
                          ->where('id', $id)
                          ->update(['status'=> 2]);

        if ($updateStatus) {
            $alert  = array('status'=> true, 'msg'=> 'Laporan telah ditolak');
        } else {
            $alert  = array('status'=> false, 'msg' => 'System erorr.');
        }

        echo json_encode($alert);
    }
}
