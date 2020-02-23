<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use App\Http\Models\user;
use App\Http\Models\mahasiswa;
use App\Http\Models\dosen;
use App\Http\Models\petugas;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class petugasCtrl extends Controller
{
    //
    public function views(){
      if(!Session::get('login')){
            return redirect('login')->with('message_menu', 'Login Terlebih Dahulu');
        }
        if(session()->has('jabatan')){
          $jabatan=Session::get('jabatan');
          if($jabatan=='admin'){
            $result = DB::table('users')
                      ->join('petugas', 'users.id', '=', 'petugas.id_users')
                      ->select('*')
                      ->orderBy('users.id', 'DESC')
                      ->get();
            return view('data_petugas', ['result' => $result]);
          }
          else {
            $result['dosen'] = DB::table('users')
                      ->join('dosens', 'users.id', '=', 'dosens.id_users')
                      ->join('progdis', 'progdis.id', '=', 'dosens.id_jur')
                      ->join('fakultas', 'progdis.id_fakultas', '=', 'fakultas.id')
                      ->select('*')
                      ->orderBy('users.id', 'DESC')
                      ->get();
                      $result['mahasiswa'] = DB::table('users')
                                ->join('mahasiswas', 'users.id', '=', 'mahasiswas.id_users')
                                ->join('progdis', 'progdis.id', '=', 'mahasiswas.id_jur')
                                ->join('fakultas', 'progdis.id_fakultas', '=', 'fakultas.id')
                                ->select('*')
                                ->orderBy('users.id', 'DESC')
                                ->get();
            return view('data_pengunjung', ['result' => $result]);
          }
      }
    }
    public function deleteMasPost(Request $request){
      $id_user = $request->id_user;
      $id_mas = $request->id_mas;
      $nama = $request->nama;
        user::destroy($id_user);
        return redirect()->back()->with('message', 'Pengunjung '.$nama.' berhasil dihapus');
    }
    public function deleteDosPost(Request $request){
      $id_user = $request->id_user;
      $id_dosen = $request->id_dosen;
      $nama = $request->nama;
        user::destroy($id_user);
        return redirect()->back()->with('message', 'Pengunjung '.$nama.' berhasil dihapus');
    }
    public function dmhs(){
      if(!Session::get('login')){
            return redirect('login')->with('message_menu', 'Login Terlebih Dahulu');
        }
        if(session()->has('jabatan')){
          $jabatan=Session::get('jabatan');
          if($jabatan=='admin'){
          }
          else {
            $result['dosen'] = DB::table('dosens')
                      ->join('progdis', 'progdis.id', '=', 'dosens.id_jur')
                      ->join('fakultas', 'progdis.id_fakultas', '=', 'fakultas.id')
                      ->select('*')
                      ->orderBy('dosens.id', 'DESC')
                      ->get();
                      $result['mahasiswa'] = DB::table('mahasiswas')
                                ->join('progdis', 'progdis.id', '=', 'mahasiswas.id_jur')
                                ->join('fakultas', 'progdis.id_fakultas', '=', 'fakultas.id')
                                ->select('*')
                                ->orderBy('mahasiswas.id', 'DESC')
                                ->get();
            return view('data_mhs', ['result' => $result]);
          }
      }
    }
    public function ddos(){
      if(!Session::get('login')){
            return redirect('login')->with('message_menu', 'Login Terlebih Dahulu');
        }
        if(session()->has('jabatan')){
          $jabatan=Session::get('jabatan');
          if($jabatan=='admin'){
          }
          else {
            $result['dosen'] = DB::table('dosens')
                      ->join('progdis', 'progdis.id', '=', 'dosens.id_jur')
                      ->join('fakultas', 'progdis.id_fakultas', '=', 'fakultas.id')
                      ->select('*')
                      ->orderBy('dosens.id', 'DESC')
                      ->get();
                      $result['mahasiswa'] = DB::table('mahasiswas')
                                ->join('progdis', 'progdis.id', '=', 'mahasiswas.id_jur')
                                ->join('fakultas', 'progdis.id_fakultas', '=', 'fakultas.id')
                                ->select('*')
                                ->orderBy('mahasiswas.id', 'DESC')
                                ->get();
            return view('data_dos', ['result' => $result]);
          }
      }
    }

    public function addJson(){
        $get=file_get_contents(base_path('resources/json/mhstf.json'));
        $json=json_decode($get);
        // dd($json);
        foreach ($json as $key) {

          $npm = $key->npm;
          $nama = $key->nama;
          mahasiswa::create([
            'id_users' => 0,
            'npm' => "$npm",
            'nama' => "$nama",
            'id_fak' => 2,
            'id_jur' => 1
          ]);
        }
        return redirect('login')->with('message_menu', 'Login Terlebih Dahulu');
    }

}
