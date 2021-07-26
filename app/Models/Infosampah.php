<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Infosampah extends Model
{
    protected $table = 'info_sampah';

    public function infosampah(){                                              // sesuai nama tabel
        return $this->belongsTo('\App\infosampah','id_info_sampah','id_info_sampah');
    }
}





