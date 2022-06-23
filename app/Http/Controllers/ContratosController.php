<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContrato;
use App\Models\Contrato;
use App\Models\Empleado;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Str;
class ContratosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contrato=Contrato::withCount(['empleados'])->get();
        //$contrato = Contrato::all();
        return $contrato;
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
    public function store(StoreContrato $request)
    {
        $contrato = new Contrato();
        $contrato->Nombre = $request->nombreContrato;
        $contrato->Sueldo = $request->sueldo;
        $contrato->slug= Str::slug($contrato->Nombre, '-');
        $contrato->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contrato $contrato)
    {
        $contrato = Contrato::find($contrato);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contrato $contrato)
    {
        $contrato->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contrato = Contrato::find($id);
        $contrato= $contrato->delete();
    }
}
