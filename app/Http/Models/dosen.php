<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
  public $timestamps = false;
  protected $fillable = ['id_users','nip','nama','id_fak','id_jur'];
}
