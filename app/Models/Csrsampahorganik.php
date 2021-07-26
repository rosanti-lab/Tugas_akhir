<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Csrsampahorganik extends Model
{
    protected $table = 'mon_sampah';

    public function csr_sampahorganik(){                                              // sesuai nama tabel
        return $this->belongsTo('\App\csr_sampahorganik','id','id');
    }
}
