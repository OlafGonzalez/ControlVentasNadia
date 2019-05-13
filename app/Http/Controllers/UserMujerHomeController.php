<?php

namespace ControlVentas\Http\Controllers;
use ControlVentas\Articulo;
use ControlVentas\Apartado;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use ControlVentas\User;

use Illuminate\Http\Request;

class UserMujerHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $request->user()->authorizeRoles('user');
        $Articulo = Articulo::all();

        $ArMujerJoyeria = DB::table('articulos')->where('genero','Mujer')->where('disponibilidad','Disponible')->where('categoria','Joyeria')->take(1)->get();


        $ArMujerBlusa = DB::table('articulos')->where('genero','Mujer')->where('disponibilidad','Disponible')->where('categoria','Blusas')->take(1)->get();

        $Otros= DB::select('select * from controlventas.articulos where (categoria = "Accesarios" or "Vestidos" or "Faldas")  and   disponibilidad = "Disponible" and genero = "Mujer" limit 1');

        $ArMujer = DB::table('articulos')->where('genero','Mujer')->where('disponibilidad','Disponible')->take(1)->get();


        $ApartadoHombre = DB::table('articulos')->where('genero','Mujer')->where('disponibilidad','Apartado')->take(1)->get();

        return view('userHomeMujer',compact('ArMujer','Articulo','ArMujerJoyeria','ArMujerBlusa','Otros','ApartadoHombre'));
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
        //

        $user = Auth::user();
        $articulo = Articulo::find($id);
        $articulo->disponibilidad = 'Apartado';
        $articulo->save();

        $apartado = new Apartado;

        $apartado->articulo_id = $id;
        $apartado->usuario_id =  $user->id;
        $apartado->save();

        return redirect('Mujer');
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
