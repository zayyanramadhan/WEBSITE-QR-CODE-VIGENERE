<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['id_users','nip_petugas','nama_petugas','jabatan'];
}
