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

Route::get("/peliculas", "PeliculasController@listado");

Route::get("agregarPelicula", "PeliculasController@agregar");
Route::post("agregarPelicula", "PeliculasController@guardar");

Route::get("editarPelicula/{id}", "PeliculasController@editar");
Route::post("editarPelicula/{id}", "PeliculasController@actualizar");

Route::get("eliminarPelicula/{id}", "PeliculasController@eliminar");

Route::get("/peliculas/{id}", "PeliculasController@detalle");

Route::get('/', function () {
    return view('welcome');
});
