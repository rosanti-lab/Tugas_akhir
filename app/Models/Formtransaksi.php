<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formtransaksi extends Model
{
    protected $table = 'transaksi';

    public function transaksi(){                                              // sesuai nama tabel
        return $this->belongsTo('\App\form_transaksi','id','id');
    }

}
