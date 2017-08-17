<?php

namespace dgmtm\Http\Controllers\Inventario;

use dgmtm\Centro;
use dgmtm\Equipo;
use dgmtm\Http\Requests\CreateInventarioEntradaRequest;
use Illuminate\Http\Request;

use dgmtm\Http\Requests;
use dgmtm\Http\Controllers\Controller;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response dfgdfgdfgdfgdfgdfgdf
     */
    public function index()
    {
        $equipos=Equipo::orderBy('nomb_equipo','ASC')
            ->with('centro','servicio')
            ->paginate(10);
      
        return view('inventario.equipos.index',compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $centros=Centro::orderBy('nomb_centro','ASC')
            
            ->lists('nomb_centro','id');
        
        return view('inventario.equipos.create',compact('centros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateInventarioEntradaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function buscarServicios(Request $request)
    {
        if($request->ajax())
        {
            $id=$request->id; /*Esta es la manera de realizar la busqueda usando Eloquent si se desea alimentar una etiqueta de tipo Select*/
            $servicios=Centro::find($id)->servicio;
           return  $servicios->lists('nomb_servicio','id');
        }
    }
}
