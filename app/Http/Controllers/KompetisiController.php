<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KompetisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('kompetisi')->paginate(20);

        if(isset($request->order)){
            if($request->order == '1'){
                $data = DB::table('kompetisi')
                ->orderBy('created_at', 'DESC')
                ->paginate(20);
            }elseif($request->order == '1'){
                $data = DB::table('kompetisi')
                ->orderBy('created_at', 'ASC')
                ->paginate(20);
                
            }else{
                $data = DB::table('kompetisi')
                ->orderBy('judul_kompetisi', 'ASC')
                ->paginate(20);
            }
        }


        // dd($data);
        if ($request->ajax()) {
            return view('home.list-kompetisi', compact('data'))->render();
        }
        $total_kompetisi = DB::table('kompetisi')->count();
        // dd($data);
        return view('home.kompetisi', compact('data','total_kompetisi'));
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
