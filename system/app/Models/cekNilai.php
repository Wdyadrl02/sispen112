<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cekNilai extends Model
{
    protected $table = 'ceknilai';
    use HasFactory;

    function Seksi(){
        return $this->belongsTo('App\Models\Deskripsi', 'id_deskripsi');
    }
}
