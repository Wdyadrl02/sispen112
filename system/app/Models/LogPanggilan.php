<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogPanggilan extends Model
{
    protected $table = 'log_panggilan';
    use HasFactory;

    function subEdukasi(){
        return $this->belongsTo('App\Models\Deskripsi', 'id_deskripsi');
    }
}
