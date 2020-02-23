<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\pklskripsi;
use App\Http\Models\buku;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class pklskripsiCtrl extends Controller
{
    public function views(){
      if(!Session::get('login')){
            return redirect('login')->with('message_menu', 'Login Terlebih Dahulu');
        }
        if(session()->has('jabatan')){
          $jabatan=Session::get('jabatan');
          if($jabatan=='petugas'){
            $result = pklskripsi::all()->sortByDesc('id');
            return view('pklskripsi', ['result' => $result]);
          }
          else {
            return view('404');
          }
      }
    }

    public function addPost(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:4',
            'npm' => 'required|min:4|max:20',
            'pkl' => 'min:4|max:200',
            'thnpkl' => 'required|min:4',
            'progdi' => 'required|min:4|max:20',
            'skripsi' => 'min:4|max:200',
            'wisuda' => 'min:4|max:10'
        ]);
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('d/m/Y');
        $nama = $request->nama;
        $npm = $request->npm;
        $pkl = $request->pkl;
        $thnpkl = $request->thnpkl;
        $progdi = $request->progdi;
        $skripsi = $request->skripsi;
        $wisuda = $request->wisuda;
        pklskripsi::create([
          'skripsi' => "$skripsi",
          'npm' => "$npm",
          'pkl' => "$pkl",
          'nama' => "$nama",
          'progdi' => "$progdi",
          'tgl' => "$tgl",
          'wisuda' => "$wisuda"
        ]);

        $result = pklskripsi::select('id')->where('npm','=',$npm)->get();
        foreach ($result as $keydata) {

          $cekid = $keydata->id;
        }

        $getwisuda = explode( "/", $wisuda );
        $gettgl = explode( "/", $tgl );
        $bln = $resStr = str_replace('0', '', $gettgl[1]);
        $thn = $getwisuda[0];
        $pri = $getwisuda[1];
        $proid = "";
        $setprogdi = "";
        for ($i=0; $i < $pri ; $i++) {
          $proid = $proid."I";
        }
        $ps=strtolower($progdi);
        if ($ps == "teknik informatika") {
          $setprogdi = "TF";
        }
        elseif ($ps == "sistem informasi") {
          $setprogdi = "SI";
        }
        if(!empty($pkl)){
        buku::create([
          'fromid' => "$cekid",
          'kat_buku' => "PKL",
          'nama' => "$pkl",
          'kode_buku' => "PKL/$setprogdi/$cekid/$bln/$proid/$thnpkl"
        ]);
        }
        if(!empty($skripsi)){
        buku::create([
          'fromid' => "$cekid",
          'kat_buku' => "SKRIPSI",
          'nama' => "$skripsi",
          'kode_buku' => "SKRIPSI/$setprogdi/$cekid/$bln/$proid/$thn"
        ]);
        }
      return redirect()->back()->with('message', 'Buku PKL dan Skripsi berhasil ditambahkan');
    }

    public function updatePost(Request $request){
        $this->validate($request, [
            'tgl' => 'required|min:4',
            'nama' => 'required|min:4',
            'npm' => 'required|min:4|max:50',
            'pkl' => 'min:4|max:200',
            'thnpkl' => 'required|min:4',
            'progdi' => 'required|min:4|max:20',
            'skripsi' => 'min:4|max:200',
            'wisuda' => 'min:4|max:10'
        ]);
        date_default_timezone_set('Asia/Jakarta');
        $id = $request->id;
        $tgl = $request->tgl;
        $nama = $request->nama;
        $npm = $request->npm;
        $pkl = $request->pkl;
        $thnpkl = $request->thnpkl;
        $progdi = $request->progdi;
        $skripsi = $request->skripsi;
        $wisuda = $request->wisuda;
        pklskripsi::find($id)->update([
          'skripsi' => "$skripsi",
          'npm' => "$npm",
          'pkl' => "$pkl",
          'nama' => "$nama",
          'progdi' => "$progdi",
          'tgl' => "$tgl",
          'wisuda' => "$wisuda"
        ]);

        $getwisuda = explode( "/", $wisuda );
        $gettgl = explode( "/", $tgl );
        $bln = $resStr = str_replace('0', '', $gettgl[1]);
        $thn = $getwisuda[0];
        $pri = $getwisuda[1];
        $proid = "";
        $setprogdi = "";
        for ($i=0; $i < $pri ; $i++) {
          $proid = $proid."I";
        }
        $ps=strtolower($progdi);
        if ($ps == "teknik informatika") {
          $setprogdi = "TF";
        }
        elseif ($ps == "sistem informasi") {
          $setprogdi = "SI";
        }
        if(!empty($pkl)){
        buku::where('fromid', '=', $id)->where('kat_buku', '=', 'PKL')->update([
          'kat_buku' => "PKL",
          'nama' => "$pkl",
          'kode_buku' => "PKL/$setprogdi/$id/$bln/$proid/$thnpkl"
        ]);
        }
        if(!empty($skripsi)){
        buku::where('fromid', '=', $id)->where('kat_buku', '=', 'SKRIPSI')->update([
          'kat_buku' => "SKRIPSI",
          'nama' => "$skripsi",
          'kode_buku' => "SKRIPSI/$setprogdi/$id/$bln/$proid/$thn"
        ]);
        }
      return redirect()->back()->with('message', 'Buku PKL dan Skripsi berhasil diubah');
    }

    public function deletePost(Request $request){
      $id = $request->id;
      $nama = $request->nama;
        $result1 = buku::where('fromid', '=', $id)->where('kat_buku', '=', 'PKL')->get();
        $result2 = buku::where('fromid', '=', $id)->where('kat_buku', '=', 'SKRIPSI')->get();
        foreach ($result1 as $keydata) {
          $id_pkl = $keydata->id;
        }
        foreach ($result2 as $keydata) {
          $id_skripsi = $keydata->id;
        }
        buku::destroy($id_pkl);
        buku::destroy($id_skripsi);
        pklskripsi::destroy($id);
        return redirect()->back()->with('message', 'Buku PKL dan Skripsi '.$nama.' berhasil dihapus');
    }
    public function addJson(){
        $get=file_get_contents(base_path('resources/json/si2019.json'));
        $json=json_decode($get);
        // dd($json);
        foreach ($json as $key) {

          $tgl = $key->tgl;
          $nama = $key->nama;
          $npm = $key->npm;
          $pkl = $key->pkl;
          $progdi = $key->progdi;
          $skripsi = $key->skripsi;
          $wisuda = $key->wisuda;
          pklskripsi::create([
            'skripsi' => "$skripsi",
            'npm' => "$npm",
            'pkl' => "$pkl",
            'nama' => "$nama",
            'progdi' => "$progdi",
            'tgl' => "$tgl",
            'wisuda' => "$wisuda"
          ]);

          $result = pklskripsi::select('id')->where('npm','=',$npm)->get();
          foreach ($result as $keydata) {

            $cekid = $keydata->id;
          }

          $getwisuda = explode( "/", $wisuda );
          $gettgl = explode( "/", $tgl );
          $bln = $resStr = str_replace('0', '', $gettgl[1]);
          $thn = $getwisuda[0];
          $pri = $getwisuda[1];
          $proid = "";
          $setprogdi = "";
          for ($i=0; $i < $pri ; $i++) {
            $proid = $proid."I";
          }
          $ps=strtolower($progdi);
          if ($ps == "teknik informatika") {
            $setprogdi = "TF";
          }
          elseif ($ps == "sistem informasi") {
            $setprogdi = "SI";
          }
          if(!empty($pkl)){
          buku::create([
            'fromid' => "$cekid",
            'kat_buku' => "PKL",
            'nama' => "$pkl",
            'kode_buku' => "PKL/$setprogdi/$cekid/$bln/$proid/$thn"
          ]);
          }
          if(!empty($skripsi)){
          buku::create([
            'fromid' => "$cekid",
            'kat_buku' => "SKRIPSI",
            'nama' => "$skripsi",
            'kode_buku' => "SKRIPSI/$setprogdi/$cekid/$bln/$proid/$thn"
          ]);
          }
        }
        return redirect('login')->with('message_menu', 'Login Terlebih Dahulu');
    }
}
