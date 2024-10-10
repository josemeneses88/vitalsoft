<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipomtto extends Model
{
    use HasFactory;


    // envio a reporte de servicio
    public function reporteservicios(){// Aqui va en plural 
        return $this->hasMany('App\Models\reporteservicio'); //Entidad fuerte
    }

}
