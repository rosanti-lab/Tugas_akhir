<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class infotransaksi extends Model
{
    protected $table = 'info_transaksi';

    public function infotransaksi(){                                              // sesuai nama tabel
        return $this->belongsTo('\App\infotransaksi','id_info_transaksi','id_info_transaksi');
    }
}





