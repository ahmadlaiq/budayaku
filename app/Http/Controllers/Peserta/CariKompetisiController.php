<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kompetisi;
use App\Karya;
use Illuminate\Support\Facades\Auth;
use DataTables;

class CariKompetisiController extends Controller
{
    public function CariKompetisiPage(Request $request){
        //$kompetisi = DB::table('kompetisi');
        //return view('peserta.cari-kompetisi', ['kompetisi'=> $kompetisi]);
        if($request->ajax()){
            $order_by = $request->ordering_by;
            $sql = "";

            if(isset($request->id_auth)){
                $sql = " select kompetisi.*, karya.id as karya_id from kompetisi left join karya ON kompetisi.id = karya.kompetisi_id Where karya.peserta_id = '$request->id_auth'";
            }else{
                $sql = "select * from kompetisi ";
            }

            if($order_by == '1'){
                $sql .= '';
            }elseif($order_by == '2'){
                $sql .= " ORDER BY biaya_pendaftaran ASC";
            }elseif($order_by == '3'){
                $sql .= " ORDER BY biaya_pendaftaran DESC";
            }elseif($order_by == '4'){
                $sql .= " ORDER BY judul_kompetisi ASC";
            }else{
                $sql .= " ORDER BY created_at ASC";
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
        $kompetisi = Kompetisi::paginate(10);
        return view('peserta.cari-kompetisi', compact('kompetisi'));
    }

    public function DetailCariKompetisiPage(Kompetisi $kompetisi){
        // dd($kompetisi);
        return view('peserta.detail-cari-kompetisi', [
            'kompetisi' => $kompetisi
        ]);
    }

    public function KirimKarya(Request $request)
    { 		
        $gambar_karya    = $request->file('gambar_karya');
        $gambar_karyaName = time()."_".$gambar_karya->getClientOriginalName();
        $gambar_karyaPath   = "gambar_karya";
        $gambar_karya->move($gambar_karyaPath, $gambar_karyaName);
        
        $berkas_pendaftaran    = $request->file('berkas_pendaftaran');
        $berkas_pendaftaranName = time()."_".$berkas_pendaftaran->getClientOriginalName();
        $berkas_pendaftaranPath   = "berkas_pendaftaran";
        $berkas_pendaftaran->move($berkas_pendaftaranPath, $berkas_pendaftaranName);
        
        //generate name file pembayaran
        $profile = DB::table('peserta')->where('id', Auth::guard('peserta')->user()->id)->first();
        $arr = "bukti_pembayaran_".str_replace(" ","_",$profile->nama_lengkap)."_".rand(10,100).date('Ymd');
        $ext = $request->bukti_pembayaran->extension(); 
        //end generate kode
        $bukti_bayar    = $request->file('bukti_pembayaran');
        $file_name_bayar = $arr.".".$ext;
        $folder_bukti_bayar   = "bukti_pembayaran";
        $bukti_bayar->move($folder_bukti_bayar, $file_name_bayar);

        $this->saveKarya($request->all(), $berkas_pendaftaranName, $gambar_karyaName, $file_name_bayar);

        //return dd(Auth::guard('penyelenggara'));
        return redirect()->intended('/peserta/cari-kompetisi');
    }
    
    protected function saveKarya(array $data, $berkas_pendaftaran = null, $gambar_karyaName = null, $file_name_bayar)
    {
        if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
        $date = date_create(now());
        $arr = '<iframe width="560" height="315" src="https://www.youtube.com/embed/';
        $arr .= substr($data['link_youtube'],17);
        $arr .= '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        $link_youtube = $arr;
        // dd($arr);
        return Karya::create([
            'judul_karya'          => $data['judul_karya'],
            'link_youtube'         => $link_youtube,
            'deskripsi'            => $data['deskripsi'],
            'gambar_karya'         => $gambar_karyaName,
            'berkas_pendaftaran'   => $berkas_pendaftaran,
            'peserta_id'           => Auth::guard('peserta')->user()->id,
            'kompetisi_id'         => $data['kompetisi_id'],
            'created_at'           => $date,
            'bukti_pembayaran'     => $file_name_bayar
        ]);
    }

    public function read_all(){
        DB::table('karya')->where('peserta_id', Auth::user()->id)->update([
            'status' => '1'
        ]);
        return redirect()->back();
    }
    public function read_all_penyelenggara(){
        $id = Auth::guard('penyelenggara')->user()->id;
        DB::table('karya')->leftjoin('kompetisi','kompetisi.id', 'karya.kompetisi_id')->where('kompetisi.penyelenggara_id', $id)->where('karya.status','!=','2')->update([
            'karya.status' => 2
            ]);
            return redirect()->back();
        }
        function detail_karya($id){
            $data = DB::table('karya')->where('id', $id)->first();
            return view('peserta.detail-karya-kompetisi', compact('data'));
        }
        function pemenang_kompetisi($id){
            $id_peserta = Auth::guard('peserta')->user()->id;
            $get_juara_pertama = DB::table('karya')->leftjoin('peserta','peserta.id','karya.peserta_id')->where('status_juara', '1')->where('kompetisi_id', $id)->first();
            $get_juara_dua = DB::table('karya')->leftjoin('peserta','peserta.id','karya.peserta_id')->where('status_juara', '2')->where('kompetisi_id', $id)->first();
            $get_juara_tiga = DB::table('karya')->leftjoin('peserta','peserta.id','karya.peserta_id')->where('status_juara', '3')->where('kompetisi_id', $id)->first();
            $cek_juara = DB::table('karya')->leftjoin('peserta','peserta.id','karya.peserta_id')->where('status_juara', '!=', null)->where('kompetisi_id', $id)->where('peserta_id', $id_peserta)->count();
            $kompetisi = DB::table('kompetisi')->where('id', $id)->first();
            $karya = DB::table('karya')->leftjoin('peserta','peserta.id','karya.peserta_id')->where('kompetisi_id', $id)->get();
            return view('peserta.pemenang-kompetisi', compact('get_juara_pertama','get_juara_dua','get_juara_tiga','kompetisi','karya','cek_juara'));
    }

}
