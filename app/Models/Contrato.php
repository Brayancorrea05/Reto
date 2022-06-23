<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empleado;
use Illuminate\Database\Eloquent\Casts\Attribute;
class Contrato extends Model
{
    use HasFactory;

    //relacion uno a uno
    public function empleados(){
        return $this -> hasMany(Empleado::class);
    }
    protected $guarded = ['status'];
    public function getRouteKeyName()
    {
        return 'slug'; //muestra en la url el campo slug en vez de el id
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
