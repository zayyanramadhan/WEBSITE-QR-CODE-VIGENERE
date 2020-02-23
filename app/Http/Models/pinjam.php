<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class pinjam extends Model
{
  public $timestamps = false;
  protected $fillable = ['username','id_buku','tgl_pinjam','tgl_kembali','status','denda','bayar_denda'];
}
