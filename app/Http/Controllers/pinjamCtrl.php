<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\pinjam;
use App\Http\Models\buku;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class pinjamCtrl extends Controller
{
  public function views(){
    if(!Session::get('login')){
          return redirect('login')->with('message_menu', 'Login Terlebih Dahulu');
      }
      if(session()->has('jabatan')){
        $jabatan=Session::get('jabatan');
        if($jabatan=='petugas'){
          date_default_timezone_set('Asia/Jakarta');
          $tglnow = date('Y/m/d');
          $datapinjam['mahasiswa'] = DB::table('pinjams')->join('bukus', 'bukus.id', '=', 'pinjams.id_buku')
          ->join('users', 'users.username', '=', 'pinjams.username')
          ->join('mahasiswas', 'mahasiswas.npm', '=', 'pinjams.username')
          ->select('bukus.nama as judul','mahasiswas.nama as nama','bukus.kode_buku','users.username','pinjams.status','pinjams.tgl_pinjam','pinjams.tgl_kembali','pinjams.bayar_denda','pinjams.id as idpin')
          ->orderBy('pinjams.id', 'DESC')
          ->get();
            $datapinjam['dosen'] =  DB::table('pinjams')->join('bukus', 'bukus.id', '=', 'pinjams.id_buku')
            ->join('users', 'users.username', '=', 'pinjams.username')
            ->join('dosens', 'dosens.nip', '=', 'pinjams.username')
            ->select('bukus.nama as judul','dosens.nama as nama','bukus.kode_buku','users.username','pinjams.status','pinjams.tgl_pinjam','pinjams.tgl_kembali','pinjams.bayar_denda','pinjams.id as idpin')
            ->orderBy('pinjams.id', 'DESC')
            ->get();
            foreach($datapinjam['mahasiswa'] as $datamas){
              $tgl_pinjam=$datamas->tgl_pinjam;
              $tgl_kembali=$datamas->tgl_kembali;
              $id=$datamas->idpin;
              $date = str_replace('/', '-', $tgl_pinjam);
              $datekem = str_replace('/', '-', $tgl_kembali);
              $cekdate = date('Y/m/d',strtotime("+3 days", strtotime($date)));
              $cekdatekem = date('Y/m/d',strtotime("+0 days", strtotime($datekem)));
              $dates1=date_create($cekdate);
              $dates2=date_create($cekdatekem);
              $diffs=date_diff($dates1,$dates2);
              $tes1= $diffs->format("%R%a");
              $denda="";
              if($tes1>0){
                $denda=$tes1*1000;
                pinjam::find($id)->update([
                  'denda' => $denda
                ]);
              }
              if ($cekdate<=$tglnow && $tgl_kembali=="-") {
              $status="Terlambat";
              $date1=date_create($cekdate);
              $date2=date_create($tglnow);
              $diff=date_diff($date1,$date2);
              $tes= $diff->format("%R%a");
              if($tes>0){
                $denda=$tes*1000;
                pinjam::find($id)->update([
                  'denda' => $denda
                ]);
              }
              }
            }
            foreach($datapinjam['dosen'] as $datados){
              $tgl_pinjam=$datados->tgl_pinjam;
              $tgl_kembali=$datados->tgl_kembali;
              $id=$datamas->idpin;
              $date = str_replace('/', '-', $tgl_pinjam);
              $datekem = str_replace('/', '-', $tgl_kembali);
              $cekdate = date('Y/m/d',strtotime("+3 days", strtotime($date)));
              $cekdatekem = date('Y/m/d',strtotime("+0 days", strtotime($datekem)));
              $dates1=date_create($cekdate);
              $dates2=date_create($cekdatekem);
              $diffs=date_diff($dates1,$dates2);
              $tes1= $diffs->format("%R%a");
              $denda="";
              if($tes1>0){
                $denda=$tes1*1000;
                pinjam::find($id)->update([
                  'denda' => $denda
                ]);
              }
              if ($cekdate<=$tglnow && $tgl_kembali=="-") {
              $status="Terlambat";
              $date1=date_create($cekdate);
              $date2=date_create($tglnow);
              $diff=date_diff($date1,$date2);
              $tes= $diff->format("%R%a");
              if($tes>0){
                $denda=$tes*1000;
                pinjam::find($id)->update([
                  'denda' => $denda
                ]);
              }
              }
            }
          return view('pinjamview', ['result' => $datapinjam]);
        }
        else {
          return view('404');
        }
    }
  }

  public function apiRiwayatPinjam(Request $request){
      try {
      $username = $request->username;
      date_default_timezone_set('Asia/Jakarta');
      $tgl = date('d/m/Y H:i:s');
      $tglnow = date('Y/m/d');
      $datapinjam1= DB::table('pinjams')
      ->where('username',$username)
      ->orderBy('pinjams.id', 'DESC')
      ->get();
      foreach ($datapinjam1 as $datapin) {
        $tgl_pinjam=$datapin->tgl_pinjam;
        $tgl_kembali=$datapin->tgl_kembali;
        $id=$datapin->id;
        $date = str_replace('/', '-', $tgl_pinjam);
        $datekem = str_replace('/', '-', $tgl_kembali);
        $cekdate = date('Y/m/d',strtotime("+3 days", strtotime($date)));
        $cekdatekem = date('Y/m/d',strtotime("+0 days", strtotime($datekem)));
        $dates1=date_create($cekdate);
        $dates2=date_create($cekdatekem);
        $diffs=date_diff($dates1,$dates2);
        $tes1= $diffs->format("%R%a");
        $denda="";
        if($tes1>0){
          $denda=$tes1*1000;
          pinjam::find($id)->update([
            'denda' => $denda
          ]);
        }
        if ($cekdate<=$tglnow && $tgl_kembali=="-") {
        $status="Terlambat";
        $date1=date_create($cekdate);
        $date2=date_create($tglnow);
        $diff=date_diff($date1,$date2);
        $tes= $diff->format("%R%a");
        if($tes>0){
          $denda=$tes*1000;
          pinjam::find($id)->update([
            'denda' => $denda
          ]);
        }
        }
      }

          $datapinjam= DB::table('pinjams')->join('bukus', 'pinjams.id_buku', '=', 'bukus.id')
          ->where('username',$username)
          ->select('nama','kode_buku','tgl_pinjam','status','denda','bayar_denda')
          ->orderBy('pinjams.id', 'DESC')
          ->get();

        return response()->json([
          'code' => '200',
          'message' => 'success',
          'items' => $datapinjam
          ]);
  }catch (\Exception $e) {
      return response()->json([
        'code' => '555',
        'message' => 'ERROR '
        ]);
    }
  }
  public function apiPinjam(Request $request){
      try {
      $username = $request->username;
      $buku = $request->buku;
      date_default_timezone_set('Asia/Jakarta');
      $tgl = date('d/m/Y H:i:s');
        $databuku = buku::where('nama',$buku)->first();
        $getidbuku = $databuku->id;
        $cekpinjam = pinjam::where('id_buku', '=', $getidbuku)->where('username', '=', $username)->where('status', '=','Pinjam')->first();
        if ($cekpinjam == null) {
        pinjam::create([
          'username' => "$username",
          'id_buku' => "$getidbuku",
          'tgl_pinjam' => "$tgl",
          'tgl_kembali' => "-",
          'status' => "Pinjam"
        ]);
        }
            $datapinjam= DB::table('pinjams')->join('bukus', 'pinjams.id_buku', '=', 'bukus.id')
            ->where('username',$username)
            ->select('nama','kode_buku','tgl_pinjam','status','denda','bayar_denda')
            ->orderBy('pinjams.id', 'DESC')
            ->get();

        if ($cekpinjam == null) {
          return response()->json([
            'code' => '200',
            'message' => 'Pinjam Buku Berhasil',
            'items' => $datapinjam
            ]);
        }
        else {
          return response()->json([
            'code' => '200',
            'message' => 'Gagal, Buku Telah Dipinjam',
            'items' => $datapinjam
            ]);
        }
  }catch (\Exception $e) {
      return response()->json([
        'code' => '555',
        'message' => 'ERROR'
        ]);
    }
  }
  public function apiKembali(Request $request){
    try {
    $username = $request->username;
    $buku = $request->buku;
    date_default_timezone_set('Asia/Jakarta');
    $tgl = date('d/m/Y H:i:s');
      $databuku = buku::where('nama',$buku)->first();
      $getidbuku = $databuku->id;
      $cekpinjam =DB::table('pinjams')->select('*')->where('id_buku', '=', $getidbuku)->where('username', '=', $username)->where('status', '=','Pinjam')->first();
      if ($cekpinjam != null) {
        $getidpinjam = $cekpinjam->id;
      pinjam::find($getidpinjam)->update([
        'tgl_kembali' => "$tgl",
        'status' => "Selesai"
      ]);
      }
          $datapinjam= DB::table('pinjams')->join('bukus', 'pinjams.id_buku', '=', 'bukus.id')
          ->where('username',$username)
          ->select('nama','kode_buku','tgl_pinjam','status','denda','bayar_denda')
          ->orderBy('pinjams.id', 'DESC')
          ->get();

      if ($cekpinjam != null) {
        return response()->json([
          'code' => '200',
          'message' => 'Pinjam Buku Berhasil Dikembalikan',
          'items' => $datapinjam
          ]);
      }
      else {
        return response()->json([
          'code' => '200',
          'message' => 'Gagal, Buku Belum Dipinjam',
          'items' => $datapinjam
          ]);
      }
}catch (\Exception $e) {
    return response()->json([
      'code' => '555',
      'message' => 'ERROR'
      ]);
  }
  }
  public function apiCekStatus(Request $request){
    try {
    $username = $request->username;
    date_default_timezone_set('Asia/Jakarta');
    $tglnow = date('Y/m/d');
    $buku ="";
    $cekdenda =0;
          $datapinjam = DB::table('pinjams')->join('bukus', 'pinjams.id_buku', '=', 'bukus.id')
          ->where('username',$username)
          ->where('status', '=','Pinjam')
          ->select('nama','kode_buku','tgl_pinjam','status','denda','bayar_denda')
          ->orderBy('pinjams.id', 'DESC')
          ->get();

          foreach ($datapinjam as $data) {
            $tgl=$data->tgl_pinjam;
            $databuku=$data->nama;
            $denda1=$data->denda;
            $denda2=$data->bayar_denda;
            $date = str_replace('/', '-', $tgl);
            $cekdate = date('Y/m/d',strtotime("+4 days", strtotime($date)));
            if ($cekdate<=$tglnow) {
              $cekdenda=1;
              if ($buku=="") {
                $buku="$databuku";
              }else {
                $buku="$buku, $databuku";
              }
            }
          }

      if ($datapinjam != null && $buku !="" && $cekdenda==1) {
        return response()->json([
          'code' => '200',
          'message' => 'Denda Pinjam Buku',
          'items' => $buku
          ]);
      }
      else if($denda1!=$denda2 && $denda1!="") {
        return response()->json([
          'code' => '200',
          'message' => 'Denda Pinjam Buku'
          ]);
      }
      else {
        return response()->json([
          'code' => '200',
          'message' => 'Tidak ada'
          ]);
      }
}catch (\Exception $e) {
    return response()->json([
      'code' => '555',
      'message' => 'ERROR'
      ]);
  }
  }

  public function membayardenda(Request $request){
      $this->validate($request, [
          'bayar' => 'required|min:3|numeric'
      ]);
      $id = $request->id;
      $bayardenda = $request->bayar;
      $datapinjam = pinjam::where('id','=',$id)->first();
      $denda=$datapinjam->denda;
      $bayar_denda=$datapinjam->bayar_denda;
      if ($bayar_denda=="") {
        $bayar_denda=0;
      }
      $totdenda=$bayar_denda+$bayardenda;
      if($denda!="" && $denda!=$bayar_denda && $totdenda<=$denda){
        pinjam::find($id)->update([
          'bayar_denda' => "$totdenda"
        ]);
        return redirect()->back()->with('message', 'Denda Berhasil Ditambahkan');
      }
      else {
        return redirect()->back()->with('messageE', 'Nominal Denda Salah');
      }


  }

}
