<?php

namespace App\Http\Controllers\Penyelenggara;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;

class ListKaryaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kompetisi = DB::table('kompetisi')->where('id',$id)->first();
        return view('penyelenggara.list-karya', compact('kompetisi'));
    }

    public function dataDT(Request $request)
    {
        $data = DB::table('karya AS ta')->join('peserta AS tb','tb.id','ta.peserta_id')->select('tb.email AS email_peserta','tb.nama_lengkap', 'ta.*','ta.id AS id_karya')->where('ta.kompetisi_id',$request->id)->get();
        return Datatables::of($data)
        ->addColumn('action', function($row){
            $btn = '';
            $btn = ' <a type="button" style="color:white;" class="btn btn-info btn-sm detail-karya-modal">Detail</a>';
            return  $btn;
        })
        ->addColumn('embeded', function($row){
            $btn = '';
            $btn = str_replace('width="560"','width="100%"',$row->link_youtube);
            return  $btn;
        })
        ->rawColumns(['action','embeded'])
        ->addIndexColumn()
        ->make(true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function set_juara(Request $request)
    {
        $data_cek = DB::table('karya')->where('kompetisi_id', $request->kompetisi_id)->where('status_juara',$request->peringkat)->where('status_juara','!=',null)->count();
        if($data_cek > 0 ){
            return json_encode(array('statusCode'=>301));
        }else{
            DB::table('karya')->where('id', $request->id_karya)->update([
                'status_juara' => $request->peringkat
            ]);
            return json_encode(array('statusCode'=>200));

        }
       
      
    }
}
