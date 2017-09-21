<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;

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
}
