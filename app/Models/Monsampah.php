<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Monsampah extends Model
{
    protected $table = 'mon_sampah';

    public function mon_sampah(){                                              // sesuai nama tabel
        return $this->belongsTo('\App\mon_sampah','id','id');
    }
}
