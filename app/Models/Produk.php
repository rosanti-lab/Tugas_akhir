<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    protected $table = 'produks';

    public function produk(){                                              // sesuai nama tabel
        return $this->belongsTo('\App\produk','id_produk','id_produk');
    }
}
