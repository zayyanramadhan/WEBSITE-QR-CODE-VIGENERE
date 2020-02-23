<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\user;
use App\Http\Models\petugas;
use App\Http\Models\dosen;
use App\Http\Models\mahasiswa;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class userCtrl extends Controller
{
    public function registerPetugasPost(Request $request){
        $this->validate($request, [
            'no_telp' => 'required|min:4',
            'alamat' => 'required|min:4',
            'email' => 'required|min:4|max:50|email|unique:users',
            'pass' => 'required|min:4|max:30',
            'pass1' => 'required|same:pass',
            'nip_petugas' => 'required|min:4|max:50|unique:petugas',
            'nama' => 'required|min:4|max:50',
            'jabatan' => 'required|min:4|max:15',
        ]);
        $email = $request->email;
        $nama = $request->nama;
        $no_tlp = $request->no_telp;
        $alamat = $request->alamat;
        $nip = $request->nip_petugas;
        $jabatan = $request->jabatan;
        $password = Hash::make($request->pass);
        user::create([
          'username' => "$nip",
          'no_telp' => "$no_tlp",
          'alamat' => "$alamat",
          'email' => "$email",
          'password' => "$password"
        ]);
        $datauser = user::where('username','=',$nip)->first();
        $iduser = $datauser->id;
        petugas::create([
          'id_users' => "$iduser",
          'nip_petugas' => "$nip",
          'nama_petugas' => "$nama",
          'jabatan' => "$jabatan"
        ]);
        $datapetugas = petugas::where('nip_petugas',$nip)->first();
        $idpetugas = $datapetugas->id;
        user::find($iduser)->update([
          'id_petugas' => "$idpetugas",
          'id_dosen' => "0",
          'id_mahasiswa' => "0"
        ]);
      return redirect()->back()->with('message', 'Petugas berhasil terdaftar');
    }

    public function updatePetugasPost(Request $request){
      $this->validate($request, [
          'no_telp' => 'required|min:4',
          'alamat' => 'required|min:4',
          'email' => 'required|min:4|max:50|email',
          'nip_petugas' => 'required|min:4|max:50',
          'nama' => 'required|min:4|max:50',
          'jabatan' => 'required|min:4|max:15',
      ]);
      $id = $request->id;
      $email = $request->email;
      $nama = $request->nama;
      $no_tlp = $request->no_telp;
      $alamat = $request->alamat;
      $nip = $request->nip_petugas;
      $jabatan = $request->jabatan;
        user::find($id)->update([
          'username' => "$nip",
          'no_telp' => "$no_tlp",
          'alamat' => "$alamat",
          'email' => "$email"
        ]);

        petugas::find($id)->update([
          'nip_petugas' => "$nip",
          'nama_petugas' => "$nama",
          'jabatan' => "$jabatan"
        ]);
        return redirect()->back()->with('message', 'Data Petugas berhasil diubah');
    }

    public function deletePetugasPost(Request $request){
      $id = $request->id;
      $nama = $request->nama;
        user::destroy($id);
        petugas::destroy($id);
        return redirect()->back()->with('message', 'Data Petugas '.$nama.' berhasil dihapus');
    }

    public function login(){
        return view('loginrvs');
    }

    public function loginPost(Request $request){
        $username = $request->username;
        $password = $request->password;

        $data = user::where('username',$username)->first();
        if(@count($data) > 0){
            if(Hash::check($password,$data->password)){
              $datapetugas = petugas::where('nip_petugas',$username)->first();
              $namapetugas = $datapetugas->nama_petugas;
              $jabatanpetugas = $datapetugas->jabatan;
                  Session::put('name',$namapetugas);
                  Session::put('nip',$data->username);
                  Session::put('jabatan',$jabatanpetugas);
                  Session::put('login',TRUE);
                  return redirect('/');
            }
            else{
                return redirect()->back()->with('message', 'Password Salah !!');
            }
        }
        else{
            return redirect()->back()->with('message', 'Username Tidak Terdaftar !!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('message_logout', 'Logout Telah Berhasil');
    }

    public function apiLogin(Request $request){
        $username = $request->username;
        $password = $request->password;
        $data = user::where('username',$username)->first();
        $imei = $request->imei;
        $cekimei = user::where('imei','=',$imei)->count();
        $cekimeilog = user::where('imei','=',$imei)->where('username',$username)->count();
        // return response()->json([
        //   'code' => '200',
        //   'message' => 'login gagal password salah'
        //   ]);
        // if ($cekimei==0 !! $cekimeilog>=1) {

        if(@count($data) > 0){
          // if ($cekimei==0) {
          //   user::where('username','=',$username)->update([
          //     'imei' => "$imei"
          //   ]);
          // }
          if ($data->id_petugas>0) {
            if(Hash::check($password,$data->password)){
              if ($cekimei==0) {
                user::where('username','=',$username)->update([
                  'imei' => "$imei"
                ]);
                $cekimeilog = user::where('imei','=',$imei)->where('username',$username)->count();
              }
                if ($cekimeilog>=1) {
              $datalog = petugas::where('nip_petugas',$username)->first();
              $nama = $datalog->nama_petugas;
              $status = $datalog->jabatan;
              $username = $datalog->nip_petugas;

              return response()->json([
                'code' => '200',
                'message' => 'login berhasil',
                'nama' => $nama,
                'status' => $status,
                'username' => $username
                ]);
              }else {
                return response()->json([
                  'code' => '200',
                  'message' => 'login gagal device user tidak sesuai'
                  ]);
              }
            }
            else{
              return response()->json([
                'code' => '200',
                'message' => 'login gagal password salah'
                ]);
            }
        }
          if ($data->id_dosen>0) {
            if(Hash::check($password,$data->password)){
              if ($cekimeilog>=1) {
              $datalog = dosen::where('nip',$username)->first();
              $nama = $datalog->nama;
              $status = "Dosen";
              $username = $datalog->nip;

              return response()->json([
                'code' => '200',
                'message' => 'login berhasil',
                'nama' => $nama,
                'status' => $status,
                'username' => $username
                ]);
              }else {
                return response()->json([
                  'code' => '200',
                  'message' => 'login gagal device user tidak sesuai'
                  ]);
              }
            }
            else{
              return response()->json([
                'code' => '200',
                'message' => 'login gagal password salah'
                ]);
            }
        }
          if ($data->id_mahasiswa>0) {
            if(Hash::check($password,$data->password)){
              if ($cekimeilog>=1) {
              $datalog = mahasiswa::where('npm',$username)->first();
              $nama = $datalog->nama;
              $status = "Mahasiswa";
              $username = $datalog->npm;

              return response()->json([
                'code' => '200',
                'message' => 'login berhasil',
                'nama' => $nama,
                'status' => $status,
                'username' => $username
                ]);
              }else {
                return response()->json([
                  'code' => '200',
                  'message' => 'login gagal device user tidak sesuai'
                  ]);
              }
            }
            else{
              return response()->json([
                'code' => '200',
                'message' => 'login gagal password salah'
                ]);
            }
        }
      }
        else{
          return response()->json([
            'code' => '200',
            'message' => 'login gagal belum terdaftar'
            ]);
        }
      // }
      // else{
      //   return response()->json([
      //     'code' => '200',
      //     'message' => 'login gagal device sudah di gunakan oleh device lain'
      //     ]);
      // }
    }
}
