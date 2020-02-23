<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class progdi extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['id_fakultas','nama_progdi'];
}
