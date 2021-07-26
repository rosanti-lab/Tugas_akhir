<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profil extends Model
{
    protected $table = 'profil';

    public function profil(){                                              // sesuai nama tabel
        return $this->belongsTo('\App\profil','id_profil','id_profil');
    }
}
