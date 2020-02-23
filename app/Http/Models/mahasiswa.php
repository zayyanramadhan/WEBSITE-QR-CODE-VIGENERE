<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
  public $timestamps = false;
  protected $fillable = ['id_users','npm','nama','id_fak','id_jur'];
}
