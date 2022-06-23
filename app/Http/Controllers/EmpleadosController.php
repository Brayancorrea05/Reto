<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmpleado;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleado = Empleado::all();
        return $empleado;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmpleado $request)
    {
        $empleado = new Empleado();
        $empleado->Cedula = $request-> cedula;
        $empleado->Nombre = $request-> nombreEmpleado;
        $empleado->Telefono = $request-> telefono;
        $empleado->slug= Str::slug($empleado->Nombre, '-');
        $empleado->Contrato_id = $request-> contrato_id;
        $empleado->Area_id = $request-> area_id;
        $empleado->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        $empleado = Empleado::find($empleado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $empleado->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        $empleado= $empleado->delete();
    }
}
