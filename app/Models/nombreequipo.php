<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nombreequipo extends Model
{
    use HasFactory;

    public function hojadevidas(){// Aqui va en plural 
        return $this->hasMany('App\Models\hojadevida'); //Entidad fuerte
    }
}
