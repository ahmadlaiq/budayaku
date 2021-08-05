<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PameranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('karya AS ta')
        ->leftjoin('kompetisi AS tb','tb.id', 'ta.kompetisi_id')
        ->leftjoin('peserta AS tc','ta.peserta_id','tc.id')
        ->select('ta.id As id_karya','ta.link_youtube','ta.deskripsi','ta.created_at', 'ta.gambar_karya', 'ta.judul_karya', 'tb.judul_kompetisi', 'tc.nama_lengkap')
        ->paginate(20);

        if(isset($request->order)){
            if($request->order == '1'){
                $data = DB::table('karya AS ta')
                ->leftjoin('kompetisi AS tb','tb.id', 'ta.kompetisi_id')
                ->leftjoin('peserta AS tc','ta.peserta_id','tc.id')
                ->select('ta.id As id_karya','ta.link_youtube','ta.deskripsi','ta.created_at', 'ta.gambar_karya', 'ta.judul_karya', 'tb.judul_kompetisi', 'tc.nama_lengkap')
                ->orderBy('ta.created_at', 'DESC')
                ->paginate(20);
            }elseif($request->order == '1'){
                $data = DB::table('karya AS ta')
                ->leftjoin('kompetisi AS tb','tb.id', 'ta.kompetisi_id')
                ->leftjoin('peserta AS tc','ta.peserta_id','tc.id')
                ->select('ta.id As id_karya','ta.link_youtube','ta.deskripsi','ta.created_at', 'ta.gambar_karya', 'ta.judul_karya', 'tb.judul_kompetisi', 'tc.nama_lengkap')
                ->orderBy('ta.created_at', 'ASC')
                ->paginate(20);
            }else{
                $data = DB::table('karya AS ta')
                ->leftjoin('kompetisi AS tb','tb.id', 'ta.kompetisi_id')
                ->leftjoin('peserta AS tc','ta.peserta_id','tc.id')
                ->select('ta.id As id_karya','ta.link_youtube','ta.deskripsi','ta.created_at', 'ta.gambar_karya', 'ta.judul_karya', 'tb.judul_kompetisi', 'tc.nama_lengkap')
                ->orderBy('tc.nama_lengkap', 'ASC')
                ->paginate(20);
                
            }
        }


        // dd($data);
        if ($request->ajax()) {
            return view('home.list-pameran', compact('data'))->render();
        }
        $total_karya = DB::table('karya')->count();
        // dd($data);
        return view('home.pameran', compact('data','total_karya'));
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
        //
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
}
