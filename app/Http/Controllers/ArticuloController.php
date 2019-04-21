<?php

namespace ControlVentas\Http\Controllers;

use Illuminate\Http\Request;
use ControlVentas\Usuarios;
use ControlVentas\ListaArti;
use ControlVentas\Articulo;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuarios::all();
        $arti = Articulo::all();
        $lista = ListaArti::all();
        return view('Articulos',compact('lista','usuarios','arti'));
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

        $arti = new ListaArti;

       
        
        
        $arti->articulo_id=$request->input('NoArticulo');
        $arti->usuario_id=$request->input('cliente');
        $arti->precio_venta=$request->input('PVenta');
        $arti->fecha_entrega=$request->input('fecha');
        $arti->hora_entrega=$request->input('hora');
        $arti->save();

        return redirect('Articulo');
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
}
