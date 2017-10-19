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

Route::get("/generos", "GenerosController@listado");

Route::get("/actores", "ActoresController@listado");
Route::get("actores/{id}", "ActoresController@detalle");
Route::get("/actores/buscar/{busqueda}", "ActoresController@buscar");

Route::get("/peliculas", "PeliculasController@listado")->middleware("test");

Route::get("agregarPelicula", "PeliculasController@agregar");
Route::post("agregarPelicula", "PeliculasController@guardar");

Route::get("editarPelicula/{id}", "PeliculasController@editar");
Route::post("editarPelicula/{id}", "PeliculasController@actualizar");

Route::get("eliminarPelicula/{id}", "PeliculasController@eliminar");

Route::get("/peliculas/{id}", "PeliculasController@detalle")->middleware("test");

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['sarasa']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');
