<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hojadevida extends Model
{
    use HasFactory;

    //   Recibe Hoja de vida
    public function accesorio (){
        return $this->belongsTo('App\Models\Accesorio');
    }

    public function cla_biomedica (){
        return $this->belongsTo('App\Models\cla_biomedica');
    }

    public function cla_riesgo (){
        return $this->belongsTo('App\Models\cla_riesgo');
    }
    
    public function cla_uso (){
        return $this->belongsTo('App\Models\cla_uso');
    }
    
    public function codiecri (){
        return $this->belongsTo('App\Models\codiecri');
    }

    public function estadoequipo (){
        return $this->belongsTo('App\Models\estadoequipo');
    }

    public function fabricante (){
        return $this->belongsTo('App\Models\fabricante');
    }
    
    public function forma_adqui (){
        return $this->belongsTo('App\Models\forma_adqui');
    }

    public function mag_capa (){
        return $this->belongsTo('App\Models\mag_capa');
    }

    public function mag_corriente (){
        return $this->belongsTo('App\Models\mag_corriente');
    }

    public function mag_frecu (){
        return $this->belongsTo('App\Models\mag_frecu');
    }

    public function mag_fuen_alimen (){
        return $this->belongsTo('App\Models\mag_fuen_alimen');
    }

    public function mag_longitud (){
        return $this->belongsTo('App\Models\mag_longitud');
    }

    public function mag_peso (){
        return $this->belongsTo('App\Models\mag_peso');
    }

    public function mag_pot (){
        return $this->belongsTo('App\Models\mag_pot');
    }

    public function mag_pres (){
        return $this->belongsTo('App\Models\mag_pres');
    }

    public function mag_temp (){
        return $this->belongsTo('App\Models\mag_temp');
    }

    public function mag_vel (){
        return $this->belongsTo('App\Models\mag_vel');
    }

    public function mag_vol (){
        return $this->belongsTo('App\Models\mag_vol');
    }

    public function nombreequipo (){
        return $this->belongsTo('App\Models\nombreequipo');
    }

    public function nombremarca (){
        return $this->belongsTo('App\Models\nombremarca');
    }

    public function proveedor (){
        return $this->belongsTo('App\Models\proveedor');
    }

    public function servicio (){
        return $this->belongsTo('App\Models\servicio');
    }

    public function tecpredo (){
        return $this->belongsTo('App\Models\tecpredo');
    }

    public function ubifisica (){
        return $this->belongsTo('App\Models\ubifisica');
    }
    
    public function propiedad (){
        return $this->belongsTo('App\Models\propiedad');
    }


// ----------------------------------------------------------------

    // envio a reporte de servicio
    public function reporteservicios(){// Aqui va en plural 
        return $this->hasMany('App\Models\reporteservicio'); //Entidad fuerte
    }
// ----------------------------------------------------------------




}
