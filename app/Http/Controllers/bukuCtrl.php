<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\buku;
use App\Http\Services\vinegere;
use DB;
use Illuminate\Support\Facades\Session;

class bukuCtrl extends Controller
{
    public function views(){
      if(!Session::get('login')){
            return redirect('login')->with('message_menu', 'Login Terlebih Dahulu');
        }
        if(session()->has('jabatan')){
          $jabatan=Session::get('jabatan');
          if($jabatan=='petugas'){
            $result = buku::all()->sortByDesc('id');
            return view('bukuview', ['result' => $result]);
          }
          else {
            return view('404');
          }
      }
    }

    public function updatePost(Request $request){
        $this->validate($request, [
            'rak' => 'min:4|max:50'
        ]);
        $rak = $request->rak;
        buku::find($id)->update([
          'rak' => "$rak"
        ]);
      return redirect()->back()->with('message', 'Buku Sumbangan berhasil diubah');
    }
    public function generateQR(Request $request){
      
        $toqrcode = $request->toqrcode;
        $seturl = "printqrcode?v=";
        $setdata = "";
        $getkode = explode( ",", $toqrcode );
        foreach ($getkode as $key) {
          if ($key!="") {
            $result=buku::select('id')->where('kode_buku', '=', $key)->get();
            foreach ($result as $keydata) {
              $getid = $keydata->id;
              if ($setdata=="") {
                $setdata=$getid;
              }else {
                $setdata="$setdata@$getid";
              }
            }
          }
        }
        $url="$seturl$setdata";
        //dd($url);
        return response()->json(['result'=>$url,'url'=>"$url"]);
        // return response()->json(['success'=>$toqrcode]);
        // dd($toqrcode);
        // buku::find($id)->update([
        //   'rak' => "$rak"
        // ]);
        // return view('bukuview');

      // return redirect()->back()->with('message', 'Buku Sumbangan berhasil diubah');
    }
    public function qrcode(Request $request){
      if(!Session::get('login')){
            return redirect('login')->with('message_menu', 'Login Terlebih Dahulu');
        }
        if(session()->has('jabatan')){
          $jabatan=Session::get('jabatan');
          if($jabatan=='petugas'){
        $v=$request->v;
        $getkode = explode( "@", $v );
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('d/m/Y');
        foreach ($getkode as $key) {
        buku::find($key)->update([
          'tgl_qrcode' => "$tgl"
        ]);
        $getdata=buku::select('*')->where('id', '=', $key)->get();

        foreach ($getdata as $keydata2) {
          $id = $keydata2->id;
          $getid = $keydata2->fromid;
          $getkat = $keydata2->kat_buku;
          if ($getkat=="PKL") {
            $data_qrcode[] = DB::table('bukus')
                      ->join('pklskripsis', 'pklskripsis.id', '=', 'bukus.fromid')
                      ->select('*')
                      ->where('bukus.id', '=', $id)
                      ->get();
          }else if ($getkat=="SKRIPSI") {
            $data_qrcode[] = DB::table('bukus')
                      ->join('pklskripsis', 'pklskripsis.id', '=', 'bukus.fromid')
                      ->select('*')
                      ->where('bukus.id', '=', $id)
                      ->get();
          }else {
            $data_qrcode[] = DB::table('bukus')
                      ->join('sumbang_bukus', 'sumbang_bukus.id', '=', 'bukus.fromid')
                      ->select('*')
                      ->where('bukus.id', '=', $id)
                      ->get();
          }
        }

        }
        return view('cetakqrcode', ['result' => $data_qrcode]);
      }
        else {
          return view('404');
        }
    }
    }

    public function apiGetAllBuku()
    {
      $getdata=buku::select('*')->get();

      foreach ($getdata as $keydata2) {
        $id = $keydata2->id;
        $getid = $keydata2->fromid;
        $getkat = $keydata2->kat_buku;
        if ($getkat=="PKL") {
          $data_qrcode[] = DB::table('bukus')
                    ->join('pklskripsis', 'pklskripsis.id', '=', 'bukus.fromid')
                    ->select('*')
                    ->where('bukus.id', '=', $id)
                    ->get();
        }else if ($getkat=="SKRIPSI") {
          $data_qrcode[] = DB::table('bukus')
                    ->join('pklskripsis', 'pklskripsis.id', '=', 'bukus.fromid')
                    ->select('*')
                    ->where('bukus.id', '=', $id)
                    ->get();
        }else {
          $data_qrcode[] = DB::table('bukus')
                    ->join('sumbang_bukus', 'sumbang_bukus.id', '=', 'bukus.fromid')
                    ->select('*')
                    ->where('bukus.id', '=', $id)
                    ->get();
        }
      }

      $no=0;
      $noQR=0;
      foreach($data_qrcode as $data => $key){
      foreach($key as $mydata){
      $noQR++;
      $no++;
      $kode = $mydata->kode_buku;
      $kat = $mydata->kat_buku;
      $tgl = $mydata->tgl;
      if($kat=="PKL"){
        $nama = $mydata->nama;
        $judul = $mydata->pkl;
        $npm = $mydata->npm;
      }
      else if($kat=="SKRIPSI"){
        $nama = $mydata->nama;
        $judul = $mydata->skripsi;
        $npm = $mydata->npm;
      }
      else{
        $nama = $mydata->pengarang_penerbit;
        $judul = $mydata->judul;
        $npm = $mydata->tahun;
      }

      $Jdata[] = [
                    'nama' => "$nama",
                    'npm' => "$npm",
                    'judul' => "$judul",
                    'kode' => "$kode",
                    'kat' => "$kat",
                    'tgl' => "$tgl"
                  ];
      }
    }
      return response()->json([
        'code' => '200',
        'message' => 'success',
        'items' => $Jdata
        ]);
    }
}
