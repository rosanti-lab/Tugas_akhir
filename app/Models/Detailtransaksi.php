<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detailtransaksi extends Model
{
    protected $table = 'detail_transaksi';

    public function detail_transaksi(){                                              // sesuai nama tabel
        return $this->belongsTo('\App\detail_transaksi','id_detail','id_detail');
    }

}
