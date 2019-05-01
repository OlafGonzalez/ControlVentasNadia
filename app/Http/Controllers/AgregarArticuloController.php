<?php

namespace ControlVentas\Http\Controllers;

use Illuminate\Http\Request;
use ControlVentas\Articulo;

class AgregarArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     $request->user()->authorizeRoles('admin');

        return view('AgregarArticulo');
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
        $ar = new Articulo;
            if ($request->hasFile('name')) {
            $file = $request->file('name');
            $nombre = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$nombre);

        }

        $ar->nombreArticulo=$request->input('NoArticulo');
        $ar->descripcion=$request->input('descrip');
        $ar->identificador=$request->input('idarticulo');
        $ar->precio_compra=$request->input('PCompra');
        $ar->foto = $nombre;
        $ar->save();

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
        $articulo = Articulo::find($id);
        return view('editProducto',compact('articulo','id'));
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
        $articulo = Articulo::find($id);
        $articulo->nombreArticulo= $request->get('NoArticulo');
        $articulo->precio_compra= $request->get('PCompra');
        $articulo->identificador=$request->get('idarticulo');
        $articulo->save();

        return redirect('/Articulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $articulo = Articulo::find($id);
        $articulo -> delete();

        return redirect('Articulos');


    }
}
