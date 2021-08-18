<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Csrtransaksi extends Model
{
    protected $table = 'mon_transaksi';

    public function csr_transaksi(){                                              // sesuai nama tabel
        return $this->belongsTo('\App\csr_transaksi','id','id');
    }
}
