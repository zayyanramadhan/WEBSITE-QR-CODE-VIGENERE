<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class sumbang_buku extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['tgl','nama','npm','judul','pengarang_penerbit','tahun','progdi'];
}
