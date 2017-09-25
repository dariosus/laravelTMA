<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;
use App\Genero;

class PeliculasController extends Controller
{
    public function listado() {
      $peliculas = Pelicula::all();

      return view("listadoPeliculas", compact("peliculas"));
    }

    public function detalle($id) {
      $pelicula = Pelicula::find($id);

      return view("detallePeliculas", compact("pelicula"));
    }

    public function agregar() {
      $generos = Genero::all();

      $datos = compact("generos");

      return view("agregarPelicula", $datos);
    }

    public function guardar(Request $req) {
      //1. Obtener los datos
      // Usar $req como un array

      //2. Validarlos
      $reglas = [
        "title" => "required|string|unique:movies,title",
        "awards" => "required|numeric|min:0",
        "release_date"=> "required|date",
        "rating"=> "required|numeric|min:0",
        "length" => "required|numeric|min:0|max:200"
      ];

      $mensajes = [
        "required" => "El campo :attribute es requerido",
        "min" => "El campo :attribute tiene un mínimo de :min",
        "unique" => "El :attribute ya estaba en uso"
      ];

      $this->validate($req, $reglas, $mensajes);

      //3. Guardar la película

      //4. Redirigir
    }
}
