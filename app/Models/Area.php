<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
class Area extends Model
{
    use HasFactory;

    //relacion uno a uno
    public function empleado(){
        return $this -> belongsTo(Empleado::class);
    }

    protected function name(): Attribute
    {
        return new Attribute(

            //accesores- cuando acceda a un atributo ponga la primera letra mayuscula
            get: fn ($value) => ucwords($value),
            //escribirlos de las dos maneras es valido 
            set: function ($value) {
                return strtolower($value);
            }
        );
    }
}
