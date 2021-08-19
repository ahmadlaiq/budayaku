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

function rekomendasi_kompetisi(){
    $sql = "select ta.*, count(tb.kompetisi_id) total_pendaftar from kompetisi ta INNER JOIN karya tb ON tb.kompetisi_id = ta.id GROUP BY ta.id ORDER BY count(tb.kompetisi_id) DESC , ta.biaya_pendaftaran ASC LIMIT 3 ";
    return DB::select($sql);
}
function kompetisi_berakhir(){
    $id = Auth::guard('penyelenggara')->user()->id;
    $sql = "SELECT count(tgl_akhir) as total FROM kompetisi WHERE now() > tgl_akhir and penyelenggara_id = '$id'";
    return  DB::table( DB::raw("($sql) AS a"))->first();
}
function kompetisi_berlangsung(){
    $id = Auth::guard('penyelenggara')->user()->id;
    $sql = "SELECT count(tgl_akhir) as total FROM kompetisi WHERE now() < tgl_akhir and penyelenggara_id = '$id'";
    return  DB::table( DB::raw("($sql) AS a"))->first();
}
function karya_kompetisi(){
    $id = Auth::guard('penyelenggara')->user()->id;
    $sql = "select count(*) as total FROM karya ta LEFT JOIN kompetisi tb ON ta.kompetisi_id = tb.id WHERE tb.penyelenggara_id = '$id' GROUP BY tb.penyelenggara_id";
    return  DB::table( DB::raw("($sql) AS a"))->first();
}
function kompetisi_mingguan(){
    
    $id = Auth::guard('penyelenggara')->user()->id;
    $sql = "SELECT
	count(*) AS total 
FROM
	karya ta
	LEFT JOIN kompetisi tb ON ta.kompetisi_id = tb.id 
WHERE
	YEARWEEK( DATE_FORMAT(ta.created_at ,'%Y-%m-%d')) = YEARWEEK(NOW()) and tb.penyelenggara_id = '$id'
GROUP BY
	tb.penyelenggara_id";
    return  DB::table( DB::raw("($sql) AS a"))->first();
}
function getTotalPeserta($id){
    return DB::table('karya')->where('kompetisi_id', $id)->count();
}