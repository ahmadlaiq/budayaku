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

        $sql = "select ta.created_at, ta.gambar_karya, ta.judul_karya, tb.judul_kompetisi, tc.nama_lengkap from karya ta LEFT JOIN kompetisi tb On ta.kompetisi_id = tb.id LEFT JOIN peserta tc On ta.peserta_id = tc.id ";
        // dd($request->order);
        if(isset($request->order)){
            if($request->order == 2){
                $sql .= " ORDER BY ta.created_at DESC";
            }else{
                $sql .= " ORDER BY ta.created_at ASC";

            }
        }
        $data = DB::table( DB::raw("($sql) AS a"))->paginate(2);
        if ($request->ajax()) {
            return view('home.list-pameran', compact('data'))->render();
        }
        // dd($data);
        return view('home.pameran', compact('data'));
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
