<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    protected $table = 'users';

    public function admin(){                                              // sesuai nama tabel
        return $this->belongsTo('\App\about','id','id');
    }
}

