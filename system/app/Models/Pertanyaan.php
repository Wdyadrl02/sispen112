<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    use HasFactory;

    function SubEdukasi(){
        return $this->belongsTo('App\Models\Deskripsi', 'id_deskripsi');
    }
}
