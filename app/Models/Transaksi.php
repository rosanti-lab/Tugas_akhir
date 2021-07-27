<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    public function transaksi(){                                              // sesuai nama tabel
        return $this->belongsTo('\App\transaksi','id','id');
    }

    protected $fillable = [
        'name', 'alamat', 'telephon', 'berat', 'bukti_tf','jasa_pengiriman'
    ];

}
