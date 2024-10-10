<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleips extends Model
{
    use HasFactory;

        // envio a reporte de servicio
        public function reporteservicios(){// Aqui va en plural 
            return $this->hasMany('App\Models\reporteservicio'); //Entidad fuerte
        }

        // envio a reporte de mtto

        public function reportemttos(){// Aqui va en plural 
            return $this->hasMany('App\Models\reportemtto'); //Entidad fuerte
        }
}
