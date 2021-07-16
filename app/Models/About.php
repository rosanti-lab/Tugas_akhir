<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    protected $table = 'abouts';

    public function about(){                                              // sesuai nama tabel
        return $this->belongsTo('\App\about','id','id');
    }
}

