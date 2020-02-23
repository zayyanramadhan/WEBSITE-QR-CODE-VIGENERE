<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['id_mahasiswa','id_dosen','id_petugas','username','no_telp','alamat','email','password','imei'];
}
