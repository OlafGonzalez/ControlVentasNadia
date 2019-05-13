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
    public function index(Request $request)
    {
         $request->user()->authorizeRoles('user');

        
        $Articulo = Articulo::all();



        $ArHombrePlayera = DB::table('articulos')->where('genero','Hombre')->where('disponibilidad','Disponible')->where('categoria','Playera')->take(1)->get();

       

        $ArHombrePantalones = DB::table('articulos')->where('genero','Hombre')->where('disponibilidad','Disponible')->where('categoria','Pantalones')->take(1)->get();

         $ArHombreCamisa = DB::table('articulos')->where('genero','Hombre')->where('disponibilidad','Disponible')->where('categoria','Camisas')->take(1)->get();

         $ArHombreAccesorios = DB::table('articulos')->where('genero','Hombre')->where('disponibilidad','Disponible')->where('categoria','Accesarios')->take(1)->get();

        $ApartadoHombre = DB::table('articulos')->where('genero','Hombre')->where('disponibilidad','Apartado')->take(1)->get();

        return view('UserHome',compact('Articulo','ArHombrePlayera','ApartadoHombre','ArHombrePantalones','ArHombreCamisa','ArHombreAccesorios'));



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

        return redirect('Hombre');
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
