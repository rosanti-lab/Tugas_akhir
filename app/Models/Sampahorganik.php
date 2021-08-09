<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sampahorganik extends Model
{
    protected $table = 'sampahorganik';

    public function sampahorganik(){                                              // sesuai nama tabel
        return $this->belongsTo('\App\sampahorganik','id','id');
    }

    protected $fillable = [
        'name', 'alamat', 'telephon','tanggal' ,'image', 'created_at'
    ];
}
