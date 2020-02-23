<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class kunjungan extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['username','kunjungan','out'];
}
