<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\user;
use App\Http\Models\petugas;
use App\Http\Models\dosen;
use App\Http\Models\progdi;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class dosenCtrl extends Controller
{

  // public function apiRegDosen(Request $request){
  //     try {
  //     $imei = $request->imei;
  //     $cekimei = user::where('imei','=',$imei)->count();
  //     if ($cekimei<1) {
  //     $email = $request->email;
  //     $nama = $request->nama;
  //     $no_tlp = $request->no_telp;
  //     $alamat = $request->alamat;
  //     $nip = $request->nip;
  //     $prog = $request->prog;
  //     $password = Hash::make($request->pass);
  //     $cekdatauser = user::where('username','=',$nip)->count();
  //     if ($cekdatauser==0) {
  //     user::create([
  //       'username' => "$nip",
  //       'no_telp' => "$no_tlp",
  //       'alamat' => "$alamat",
  //       'email' => "$email",
  //       'password' => "$password",
  //       'imei' => "$imei"
  //     ]);
  //     $datauser = user::where('username','=',$nip)->first();
  //     $iduser = $datauser->id;
  //     $dataprogdi = progdi::where('nama_progdi','=',$prog)->first();
  //     $idprogdi = $dataprogdi->id;
  //     $idfak = $dataprogdi->id_fakultas;
  //     dosen::create([
  //       'id_users' => "$iduser",
  //       'nip' => "$nip",
  //       'nama' => "$nama",
  //       'id_fak' => "$idfak",
  //       'id_jur' => "$idprogdi"
  //     ]);
  //     $datadosen = dosen::where('nip',$nip)->first();
  //     $iddosen = $datadosen->id;
  //     user::find($iduser)->update([
  //       'id_petugas' => "0",
  //       'id_dosen' => "$iddosen",
  //       'id_mahasiswa' => "0"
  //     ]);
  //       return response()->json([
  //         'code' => '200',
  //         'message' => 'Register : '.$nama.' Telah Berhasil'
  //         ]);
  //   }
  //   else {
  //     return response()->json([
  //       'code' => '201',
  //       'message' => 'Register : gagal user sudah terdaftar'
  //       ]);
  //   }
  // }
  //   else {
  //     return response()->json([
  //       'code' => '201',
  //       'message' => 'Register : gagal device sudah terdaftar'
  //       ]);
  //   }
  // }catch (\Exception $e) {
  //     return response()->json([
  //       'code' => '555',
  //       'message' => 'ERROR Register Gagal '
  //       ]);
  //   }
  // }
  public function apiRegDosen(Request $request){
      try {
      $imei = $request->imei;
      $cekimei = user::where('imei','=',$imei)->count();
      if ($cekimei<1) {
      $email = $request->email;
      $nama = $request->nama;
      $no_tlp = $request->no_telp;
      $alamat = $request->alamat;
      $nip = $request->nip;
      $prog = $request->prog;
      $password = Hash::make($request->pass);
      $cekdatauser = user::where('username','=',$nip)->count();
      if ($cekdatauser==0) {
      $datadosen = dosen::where('nip',$nip)->first();
      $iddosen = $datadosen->id;
      user::create([
        'username' => "$nip",
        'no_telp' => "$no_tlp",
        'alamat' => "$alamat",
        'email' => "$email",
        'password' => "$password",
        'imei' => "$imei",
        'id_petugas' => "0",
        'id_dosen' => "$iddosen",
        'id_mahasiswa' => "0"
      ]);
      $datauser = user::where('username','=',$nip)->first();
      $iduser = $datauser->id;
      dosen::find($iddosen)->update([
        'id_users' => $iduser
      ]);
        return response()->json([
          'code' => '200',
          'message' => 'Aktivasi : '.$nama.' Telah Berhasil'
          ]);
    }
    else {
      return response()->json([
        'code' => '201',
        'message' => 'Aktivasi : gagal user sudah terdaftar'
        ]);
    }
  }
  else {
    return response()->json([
      'code' => '201',
      'message' => 'Aktivasi : gagal device sudah terdaftar'
      ]);
  }
  }catch (\Exception $e) {
      return response()->json([
        'code' => '555',
        'message' => 'ERROR Aktivasi Gagal '
        ]);
    }
  }
}
