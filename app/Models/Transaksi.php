<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class transaksi extends Model
{
    protected $table = 'transaksi';

    public function transaksi(){                                              // sesuai nama tabel
        return $this->belongsTo('\App\transaksi','id','id');
    }

}
