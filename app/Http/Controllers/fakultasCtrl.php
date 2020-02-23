<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\fakultas;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class fakultasCtrl extends Controller
{
    public function views(){
      if(!Session::get('login')){
            return redirect('login')->with('message_menu', 'Login Terlebih Dahulu');
        }
        if(session()->has('jabatan')){
          $jabatan=Session::get('jabatan');
          if($jabatan=='admin'){
            $result = fakultas::all()->sortByDesc('id');
            return view('fakultas', ['result' => $result]);
          }
          else {
            return view('404');
          }
      }
    }

    public function addPost(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:4'
        ]);
        $nama = $request->nama;
        fakultas::create([
          'nama_fakultas' => "$nama"
        ]);
      return redirect()->back()->with('message', 'Fakultas berhasil ditambahkan');
    }

    public function updatePost(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:4'
        ]);
        $id = $request->id;
        $nama = $request->nama;
        fakultas::find($id)->update([
          'nama_fakultas' => "$nama"
        ]);
      return redirect()->back()->with('message', 'Fakultas berhasil diubah');
    }

    public function deletePost(Request $request){
      $id = $request->id;
      $nama = $request->nama_fakultas;
        fakultas::destroy($id);
        return redirect()->back()->with('message', 'Fakultas '.$nama.' berhasil dihapus');
    }

    public function apiGetAll(){
            $result = fakultas::join('progdis', 'fakultas.id', '=', 'progdis.id_fakultas')
                              ->select('fakultas.nama_fakultas')
                              ->distinct()
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
                                  'message' => 'progdi null'
                                  ]);
                              }
    }
}
