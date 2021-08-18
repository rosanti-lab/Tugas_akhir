<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    protected $table = 'contact';

    public function contact(){                                              // sesuai nama tabel
        return $this->belongsTo('\App\contact','id_contact','id_contact');
    }
}
