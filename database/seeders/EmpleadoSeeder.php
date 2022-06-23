<?php

namespace Database\Seeders;

use App\Models\Empleado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empleado= new Empleado();
        $empleado->Cedula=1005346360;
        $empleado->Nombre="Brayan Correa";
        $empleado->Telefono=3004126781;
        $empleado->slug= Str::slug($empleado->Nombre, '-');
        $empleado->Contrato_id=1;
        $empleado->Area_id=1;
        $empleado->save();
    }
}
