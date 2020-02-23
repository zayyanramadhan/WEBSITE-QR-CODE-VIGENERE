<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\progdi;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use DB;

class progdiCtrl extends Controller
{
    public function views(){
      if(!Session::get('login')){
            return redirect('login')->with('message_menu', 'Login Terlebih Dahulu');
        }
        if(session()->has('jabatan')){
          $jabatan=Session::get('jabatan');
          if($jabatan=='admin'){
            $result =  DB::table('progdis')->join('fakultas', 'fakultas.id', '=', 'progdis.id_fakultas')
                      ->select('*')
                      ->orderBy('progdis.id', 'DESC')
                      ->get();
            return view('progdi', ['result' => $result]);
          }
          else {
            return view('404');
          }
      }
    }

    public function addPost(Request $request){
        $this->validate($request, [
            'fakultas' => 'required',
            'nama' => 'required|min:4'
        ]);
        $nama = $request->nama;
        $fakultas = $request->fakultas;
        progdi::create([
          'nama_progdi' => "$nama",
          'id_fakultas' => "$fakultas"
        ]);
      return redirect()->back()->with('message', 'Porgdi berhasil ditambahkan');
    }

    public function updatePost(Request $request){
        $this->validate($request, [
            'fakultas' => 'required',
            'nama' => 'required|min:4'
        ]);
        $id = $request->id;
        $fakultas = $request->fakultas;
        $nama = $request->nama;
        progdi::find($id)->update([
          'nama_progdi' => "$nama",
          'id_fakultas' => "$fakultas"
        ]);
      return redirect()->back()->with('message', 'Porgdi berhasil diubah');
    }

    public function deletePost(Request $request){
      $id = $request->id;
      $nama = $request->nama_progdi;
        progdi::destroy($id);
        return redirect()->back()->with('message', 'Porgdi '.$nama.' berhasil dihapus');
    }

    public function apiGetAll(Request $request){
      $progdi = $request->progdi;
            $result = progdi::join('fakultas', 'fakultas.id', '=', 'progdis.id_fakultas')
                              ->where('fakultas.nama_fakultas', '=',$progdi)
                              ->select('progdis.nama_progdi')
                              ->get();
            try {
              foreach ($result as $key => $value) {
                // code...
              }
              $cek=$key;
              return response()->json([
                'code' => '200',
                'message' => 'success',
                'items' => $result
                ]);
            } catch (\Exception $e) {
              return response()->json([
                'code' => '555',
                'message' => 'fakultas not found'
                ]);
            }
    }
}
