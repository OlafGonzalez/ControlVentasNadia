<?php

namespace ControlVentas\Http\Controllers;

use Illuminate\Http\Request;
use ControlVentas\Usuarios;

class ListarUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
                $request->user()->authorizeRoles('admin');

        $usuarios = Usuarios::all();
        return view('ListaUsuarios',compact('usuarios'));
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
    public function store(Request $request)
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
        $us = Usuarios::find($id);
        return view('editarCliente',compact('us','id'));
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
        $us = Usuarios::find($id);
        $us->telefono=$request->get('telefono');
        $us->nombre=$request->get('nombre');
        $us->correo=$request->get('correo');

        $us->save();

        return redirect('ListaCliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $us = Usuarios::find($id);

        $us->eliminar="inactivo";
        $us->save();
        return redirect('ListaCliente');
    }
}
