<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deskripsi extends Model
{
    protected $table = 'deskripsi_edukasi';
    use HasFactory;

     function Jenisedukasi(){
        return $this->belongsTo('App\Models\edukasi', 'id_jenis_edukasi');
    }
}
