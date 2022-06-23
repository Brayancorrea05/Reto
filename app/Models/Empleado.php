<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contrato;
use App\Models\Area;

class Empleado extends Model
{
    use HasFactory;

    //relacion uno a uno
    public function contrato(){
        return $this -> hasOne(Contrato::class);
    }

    //relacion uno a uno
    public function area(){
        return $this -> hasOne(Area::class);
    }
}
