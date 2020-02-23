<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use App\Http\Models\kunjungan;


class kunjunganCtrl extends Controller
{
  public function views(){
    if(!Session::get('login')){
          return redirect('login')->with('message_menu', 'Login Terlebih Dahulu');
      }
      if(session()->has('jabatan')){
        $jabatan=Session::get('jabatan');
        if($jabatan=='admin'){

        }
        else {
          $result['dosen'] = DB::table('users')
                    ->join('dosens', 'users.id', '=', 'dosens.id_users')
                    ->join('kunjungans', 'kunjungans.username', '=', 'users.username')
                    ->join('progdis', 'progdis.id', '=', 'dosens.id_jur')
                    ->join('fakultas', 'progdis.id_fakultas', '=', 'fakultas.id')
                    ->select('*')
                    ->orderBy('kunjungans.id', 'DESC')
                    ->get();
                    $result['mahasiswa'] = DB::table('users')
                              ->join('mahasiswas', 'users.id', '=', 'mahasiswas.id_users')
                              ->join('kunjungans', 'kunjungans.username', '=', 'users.username')
                              ->join('progdis', 'progdis.id', '=', 'mahasiswas.id_jur')
                              ->join('fakultas', 'progdis.id_fakultas', '=', 'fakultas.id')
                              ->select('*')
                              ->orderBy('kunjungans.id', 'DESC')
                              ->get();
          return view('data_kunjungan', ['result' => $result]);
        }
    }
  }
  public function apiKunjungan(Request $request){
      try {
      $username = $request->username;
      date_default_timezone_set('Asia/Jakarta');
      $cektgl = date('d/m/Y');
      $tgl = date('d/m/Y H:i:s');
        $cekkunjungan = DB::table('kunjungans')->where('username', '=', $username)->where('kunjungan', 'LIKE',"$cektgl%")->where('out', '=', null)->first();
        if ($cekkunjungan == null) {
        kunjungan::create([
          'username' => "$username",
          'kunjungan' => "$tgl"
        ]);
        }

        if ($cekkunjungan == null) {
          return response()->json([
            'code' => '200',
            'message' => 'CHECK IN Berhasil Dibuat'
            ]);
        }
        else {
          return response()->json([
            'code' => '222',
            'message' => 'Gagal'
            ]);
        }
  }catch (\Exception $e) {
      return response()->json([
        'code' => '555',
        'message' => "ERROR $e"
        ]);
    }
  }
  public function apiKunjunganOut(Request $request){
      try {
      $username = $request->username;
      date_default_timezone_set('Asia/Jakarta');
      $cektgl = date('d/m/Y');
      $tgl = date('d/m/Y H:i:s');
        $cekkunjungan = DB::table('kunjungans')->where('username', '=', $username)->where('kunjungan', 'LIKE',"$cektgl%")->where('out', '=', null)->first();
        if ($cekkunjungan != null) {
          $id=$cekkunjungan->id;
          kunjungan::find($id)->update([
            'out' => "$tgl"
          ]);
        }

        if ($cekkunjungan != null) {
          return response()->json([
            'code' => '200',
            'message' => 'CHECK OUT Berhasil'
            ]);
        }
        else {
          return response()->json([
            'code' => '200',
            'message' => 'Gagal'
            ]);
        }
  }catch (\Exception $e) {
      return response()->json([
        'code' => '555',
        'message' => 'ERROR'
        ]);
    }
  }
}
