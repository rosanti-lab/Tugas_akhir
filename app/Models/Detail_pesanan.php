<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_pesanan extends Model
{
    protected $table = 'transaksi';

    protected $fillable = ['produk','harga','berat','total','detail'];

}
