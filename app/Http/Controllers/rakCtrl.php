<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\rak;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class rakCtrl extends Controller
{
    public function views(){
      if(!Session::get('login')){
            return redirect('login')->with('message_menu', 'Login Terlebih Dahulu');
        }
        if(session()->has('jabatan')){
          $jabatan=Session::get('jabatan');
          if($jabatan=='petugas'){
            $result = rak::all()->sortByDesc('id');
            return view('rak', ['result' => $result]);
          }
          else {
            return view('404');
          }
      }
    }

    public function addPost(Request $request){
        $this->validate($request, [
            'kode' => 'required|min:4'
        ]);
        $kode = $request->kode;
        rak::create([
          'kode' => "$kode"
        ]);
      return redirect()->back()->with('message', 'Kode Rak berhasil ditambahkan');
    }

    public function updatePost(Request $request){
        $this->validate($request, [
            'kode' => 'required|min:4'
        ]);
        $id = $request->id;
        $kode = $request->kode;
        rak::find($id)->update([
          'kode' => "$kode"
        ]);
      return redirect()->back()->with('message', 'Kode Rak berhasil diubah');
    }

    public function deletePost(Request $request){
      $id = $request->id;
      $kode = $request->kode;
        rak::destroy($id);
        return redirect()->back()->with('message', 'Kode Rak '.$kode.' berhasil dihapus');
    }
}
