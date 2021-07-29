<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_pesanan extends Model
{
    protected $table = 'detail_pesanans';

    protected $fillable = ['produk','harga','berat','total','detail'];

}
