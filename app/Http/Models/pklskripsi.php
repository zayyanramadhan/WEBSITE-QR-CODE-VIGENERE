<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class pklskripsi extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['tgl','nama','npm','pkl','skripsi','wisuda','progdi'];
}
