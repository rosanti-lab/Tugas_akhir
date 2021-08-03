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

    // public function produk()
    // {
    // 	return $this->hasMany('App\produk','id','id');
    // }
    protected $fillable = [
        'name','id_produk', 'alamat', 'telephon', 'berat', 'berat_produk', 'jasa_pengiriman', 'harga',
    ];

}
