<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reportemtto extends Model
{
    use HasFactory;

    // recibo datos 
    public function empleips (){
        return $this->belongsTo('App\Models\empleips');
    }

    public function emplemtto (){
        return $this->belongsTo('App\Models\emplemtto');
    }

    public function reporteservicio (){
        return $this->belongsTo('App\Models\reporteservicio');
    }
}
