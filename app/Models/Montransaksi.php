<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Montransaksi extends Model
{
    protected $table = 'mon_transaksi';
    protected $guarded = [];
    protected $primaryKey = 'id_monitoring';

    public function mon_transaksi(){                                              // sesuai nama tabel
        return $this->belongsTo('\App\mon_transaksi','id_monitoring','id_monitoring');
    }

    // public function mon_transaksi(){                                              // sesuai nama tabel
    //     return $this->belongsTo('\App\mon_transaksi','id','id');
    // }
    // protected $fillable = [
    //     'name','id_produk', 'tgl_monitoring','alamat', 'telephon', 'berat', 'nama', 'ongkir','berat_produk', 'jasa_pengiriman', 'harga',
    // ];
}
