<?php

namespace Database\Seeders;

use App\Models\Contrato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class ContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Contrato = new Contrato();
        $Contrato->Nombre = "Ops";
        $Contrato->slug= Str::slug($Contrato->Nombre, '-');
        $Contrato->Sueldo = "10000000";
        
        $Contrato->save();

        $Contrato = new Contrato();
        $Contrato->Nombre = "Labor";
        $Contrato->slug= Str::slug($Contrato->Nombre, '-');
        $Contrato->Sueldo = "10000000";
       
        $Contrato->save();

        $Contrato = new Contrato();
        $Contrato->Nombre = "Término fijo";
        $Contrato->slug= Str::slug($Contrato->Nombre, '-');
        $Contrato->Sueldo = "10000000";
    
        $Contrato->save();

        $Contrato = new Contrato();
        $Contrato->Nombre = "Término indefinido";
        $Contrato->slug= Str::slug($Contrato->Nombre, '-');
        $Contrato->Sueldo = "10000000";
        
        $Contrato->save();

        $Contrato = new Contrato();
        $Contrato->Nombre = "Aprendizaje";
        $Contrato->slug= Str::slug($Contrato->Nombre, '-');
        $Contrato->Sueldo = "10000000";
        $Contrato->save();

        $Contrato = new Contrato();
        $Contrato->Nombre = "Ocasional";
        $Contrato->slug= Str::slug($Contrato->Nombre, '-');
        $Contrato->Sueldo = "10000000";
        $Contrato->save();

        $Contrato = new Contrato();
        $Contrato->Nombre = "Accidental";
        $Contrato->slug= Str::slug($Contrato->Nombre, '-');
        $Contrato->Sueldo = "10000000";
        $Contrato->save();
    }
}
