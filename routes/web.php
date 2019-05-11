<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//RUTAS ADMINISTRADOR

Route::resource('/Admin','AdministradorController');
//vista para agregar un cliente
//Route::resource('/Agregar','AgregarClienteController');
//POST Para guardar cliente de la BD
Route::POST('NuevoCliente','AgregarClienteController@store');

Route::resource('ListaCliente','ListarUsController');

Route::resource('Articulo','ArticuloController');

Route::POST('/nuevoPedido','ArticuloController@store');

Route::resource('PedidosPendientes','PedidosController');

Route::resource('Cuentas','CuentaController');

Route::resource('Pagos','PagosController');

Route::POST('/nuevoPago','PagosController@store');

Route::resource('AgregarArticulo','AgregarArticuloController');

Route::POST('/nuevoArticulo','AgregarArticuloController@store');

Route::resource('Articulos','MostrarArticulosController');

Route::resource('Apartados','ApartadoController');


//RUTAS DEL USUARIO 


Route::resource('/User','HomeUserController');

Route::resource('/Cuenta','CuentaUserController');






//////////////////////////////////////

//route::resource('/suma','sumacontroller');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
