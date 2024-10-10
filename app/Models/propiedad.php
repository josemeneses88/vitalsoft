<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propiedad extends Model
{
    use HasFactory;

    public function hojadevidas(){// Aqui va en plural 
        return $this->hasMany('App\Models\hojadevida'); //Entidad fuerte
    }


    // envio a reporte de servicio
    public function reporteservicios(){// Aqui va en plural 
        return $this->hasMany('App\Models\reporteservicio'); //Entidad fuerte
    }

}
