<?php

namespace ControlVentas\Http\Controllers;

use Illuminate\Http\Request;
use ControlVentas\Articulo;
use ControlVentas\Apartado;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use ControlVentas\User;

class HomeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Articulo = Articulo::all();
        $ArMujer = DB::table('articulos')->where('genero','Mujer')->where('disponibilidad','Disponible')->take(1)->get();
        $ArHombre = DB::table('articulos')->where('genero','Hombre')->where('disponibilidad','Disponible')->take(1)->get();

        return view('UserHome',compact('Articulo','ArMujer','ArHombre'));



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
        $user = Auth::user();
        $articulo = Articulo::find($id);
        $articulo->disponibilidad = 'Apartado';
        $articulo->save();

        $apartado = new Apartado;

        $apartado->articulo_id = $id;
        $apartado->usuario_id =  $user->id;
        $apartado->save();

        return redirect('User');
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
