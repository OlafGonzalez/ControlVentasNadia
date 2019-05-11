<?php

namespace ControlVentas\Http\Controllers;

use Illuminate\Http\Request;
use ControlVentas\Articulo;
use ControlVentas\Apartado;
use Illuminate\Support\Facades\Auth;
use ControlVentas\User;
use ControlVentas\ListaArti;

class ApartadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $articulo = Articulo::all();
        $apartado = Apartado::all();

        return view('PedidosApartados',compact('user','articulo','apartado'));
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
        $arti = Articulo::find($id);

        $arti->disponibilidad = 'Disponible';
        $arti->save();

        return redirect('/Articulos');

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
        
        $arti = new ListaArti;
        
        $arti->articulo_id=$request->input('NoArticulo');
        $arti->usuario_id=$request->input('cliente');
      //  $arti->precio_venta=$request->input('PVenta');
        $arti->fecha_entrega=$request->input('fecha');
        $arti->hora_entrega=$request->input('hora');
        $arti->save();

        $apart = Apartado::find($id);
        $apart ->eliminar = 'inactivo';
        $apart ->save();

        return redirect('Articulo');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apartados = Apartado::find($id);
        $apartados -> delete();

        return redirect('Apartados');
    }
}
