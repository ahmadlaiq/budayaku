<?php

function get_notif(){
    return DB::table('karya')->where('peserta_id', Auth::user()->id)->whereNull('status')->count();
}
function get_data_notif(){
    return DB::table('karya')->where('peserta_id', Auth::user()->id)->whereNull('status')->orderBy('created_at', 'DESC')->get();
}

function get_notif_penyelenggara($id){
    return DB::table('karya')->leftjoin('kompetisi','kompetisi.id', 'karya.kompetisi_id')->where('kompetisi.penyelenggara_id', $id)->where('karya.status','!=','2')->count();
}
function get_data_notif_penyelenggara($id){
    return DB::table('karya')->leftjoin('kompetisi','kompetisi.id', 'karya.kompetisi_id')->where('kompetisi.penyelenggara_id',$id)->where('karya.status','!=','2')->orderBy('karya.created_at', 'DESC')->get();
}

function get_selisih($tgl){
    // $awal  = date('Y-m-d H:i:s', strtotime($awal)); //waktu awal

    // $akhir = date('Y-m-d H:i:s', strtotime($akhir)); //waktu akhir
    if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
    $date = date_create(now());
    $awal  = new DateTime($tgl);
    $akhir = $date;

    $diff  = $awal->diff($akhir);
    return $diff->d.' Hari ' . $diff->h.' Jam '.$diff->i.' Menit yang Lalu';
}

function session_penyelenggara(){
    return Auth::guard('penyelenggara')->user();
}