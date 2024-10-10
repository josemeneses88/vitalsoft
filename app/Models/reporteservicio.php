<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reporteservicio extends Model
{
    use HasFactory;

//   recibo de datos
    public function servicio (){
        return $this->belongsTo('App\Models\servicio');
    }

    public function ubifisica (){
        return $this->belongsTo('App\Models\ubifisica');
    }
    
    public function propiedad (){
        return $this->belongsTo('App\Models\propiedad');
    }

    public function tipomtto (){
        return $this->belongsTo('App\Models\tipomtto');
    }

    public function empleips (){
        return $this->belongsTo('App\Models\empleips');
    }

    public function emplemtto (){
        return $this->belongsTo('App\Models\emplemtto');
    }

    public function hojadevida (){
        return $this->belongsTo('App\Models\hojadevida');
    }
// ----------------
// envio datos a reporte de mantenimiento
public function reportemttos(){// Aqui va en plural 
    return $this->hasMany('App\Models\reportemtto'); //Entidad fuerte
}


}
