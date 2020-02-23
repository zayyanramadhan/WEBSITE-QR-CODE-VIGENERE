<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['tgl_qrcode','fromid','nama','kat_buku','kode_buku','rak'];
}
