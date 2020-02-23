<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\sumbang_buku;
use App\Http\Models\buku;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class sumbang_bukuCtrl extends Controller
{
    public function views(){
      if(!Session::get('login')){
            return redirect('login')->with('message_menu', 'Login Terlebih Dahulu');
        }
        if(session()->has('jabatan')){
          $jabatan=Session::get('jabatan');
          if($jabatan=='petugas'){
            $result = sumbang_buku::all()->sortByDesc('id');
            return view('sumbangbuku', ['result' => $result]);
          }
          else {
            return view('404');
          }
      }
    }

    public function addPost(Request $request){
        $this->validate($request, [
            'progdi' => 'required|min:4|max:20',
            'nama' => 'required|min:4',
            'npm' => 'max:50',
            'judul' => 'required|min:3|max:200',
            'pengarang_penerbit' => 'required|min:4|max:50',
            'tahun' => 'required|min:4|max:4'
        ]);
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('d/m/Y');
        $progdi = $request->progdi;
        $nama = $request->nama;
        $npm = $request->npm;
        $judul = $request->judul;
        $pengarang_penerbit = $request->pengarang_penerbit;
        $tahun = $request->tahun;
        sumbang_buku::create([
          'progdi' => "$progdi",
          'pengarang_penerbit' => "$pengarang_penerbit",
          'npm' => "$npm",
          'judul' => "$judul",
          'nama' => "$nama",
          'tahun' => "$tahun",
          'tgl' => "$tgl"
        ]);

        $result = sumbang_buku::select('id')->where('nama','=',$nama)->where('tgl','=',$tgl)->get();
        foreach ($result as $keydata) {

          $cekid = $keydata->id;
        }
        $gettgl = explode( "/", $tgl );
        $bln = $gettgl[1];
        $thn = $gettgl[2];
        $kodenya= "";
        if ($bln < 5) {
          $kodenya = "I";
        }
        else if ($bln > 4 && $bln < 9) {
          $kodenya = "II";
        }
        else if ($bln > 8) {
          $kodenya = "III";
        }
        buku::create([
          'fromid' => "$cekid",
          'kat_buku' => "BACA",
          'nama' => "$judul",
          'kode_buku' => "FIK/$cekid/$kodenya/$thn"
        ]);
      return redirect()->back()->with('message', 'Buku Sumbangan berhasil ditambahkan');
    }

    public function updatePost(Request $request){
        $this->validate($request, [
            'progdi' => 'required|min:4|max:20',
            'tgl' => 'required|min:4',
            'nama' => 'required|min:4',
            'npm' => 'max:50',
            'judul' => 'required|min:3|max:200',
            'pengarang_penerbit' => 'required|min:4|max:50',
            'tahun' => 'required|min:4|max:4'
        ]);
        date_default_timezone_set('Asia/Jakarta');
        $progdi = $request->progdi;
        $id = $request->id;
        $tgl = $request->tgl;
        $nama = $request->nama;
        $npm = $request->npm;
        $judul = $request->judul;
        $pengarang_penerbit = $request->pengarang_penerbit;
        $tahun = $request->tahun;
        sumbang_buku::find($id)->update([
          'progdi' => "$progdi",
          'pengarang_penerbit' => "$pengarang_penerbit",
          'npm' => "$npm",
          'judul' => "$judul",
          'nama' => "$nama",
          'tahun' => "$tahun",
          'tgl' => "$tgl"
        ]);
        $gettgl = explode( "/", $tgl );
        $bln = $gettgl[1];
        $thn = $gettgl[2];
        $kodenya= "";
        if ($bln < 5) {
          $kodenya = "I";
        }
        else if ($bln > 4 && $bln < 9) {
          $kodenya = "II";
        }
        else if ($bln > 8) {
          $kodenya = "III";
        }
        buku::where('fromid', '=', $id)->where('kat_buku', '=', 'BACA')->update([
          'kat_buku' => "BACA",
          'nama' => "$judul",
          'kode_buku' => "FIK/$id/$kodenya/$thn"
        ]);
      return redirect()->back()->with('message', 'Buku Sumbangan berhasil diubah');
    }

    public function deletePost(Request $request){
      $id = $request->id;
      $judul = $request->judul;
      $result = buku::where('fromid', '=', $id)->where('kat_buku', '=', 'BACA')->get();
      foreach ($result as $keydata) {
        $id_buku = $keydata->id;
      }
      buku::destroy($id_buku);
        sumbang_buku::destroy($id);
        return redirect()->back()->with('message', 'Buku Sumbang Buku '.$judul.' berhasil dihapus');
    }
    public function addJson(){
        $get=file_get_contents(base_path('resources/json/SBsi2019.json'));
        $json=json_decode($get);
        // dd($json);
        foreach ($json as $key) {

          $tgl = $key->tgl;
          $nama = $key->nama;
          $npm = $key->npm;
          $judul = $key->judul;
          $pengarang = $key->pengarang;
          $thn = $key->thn;
          $progdi = $key->progdi;
          sumbang_buku::create([
            'tahun' => "$thn",
            'npm' => "$npm",
            'judul' => "$judul",
            'nama' => "$nama",
            'pengarang_penerbit' => "$pengarang",
            'tgl' => "$tgl",
            'progdi' => "$progdi"
          ]);

          $result = sumbang_buku::select('id')->where('npm','=',$npm)->get();
          foreach ($result as $keydata) {

            $cekid = $keydata->id;
          }
          $setprogdi = "";
          $ps=strtolower($progdi);
          if ($ps == "teknik informatika") {
            $setprogdi = "TF";
          }
          elseif ($ps == "sistem informasi") {
            $setprogdi = "SI";
          }

          $gettgl = explode( "/", $tgl );
          $bln = $gettgl[1];
          $thn = $gettgl[2];
          $kodenya= "";
          if ($bln < 5) {
            $kodenya = "I";
          }
          else if ($bln > 4 && $bln < 9) {
            $kodenya = "II";
          }
          else if ($bln > 8) {
            $kodenya = "III";
          }
          buku::create([
            'fromid' => "$cekid",
            'kat_buku' => "BACA",
            'nama' => "$judul",
            'kode_buku' => "FIK/$cekid/$kodenya/$thn"
          ]);
        }
        return redirect('login')->with('message_menu', 'Login Terlebih Dahulu');
    }
}
