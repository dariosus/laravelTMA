<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function listado() {
      $peliculas = [
        "Toy Story",
        "Buscando a Nemo",
        "Monsters Inc",
        "Star Wars"
      ];

      return view("listadoPeliculas", compact("peliculas"));
    }

    public function detalle($id) {
      $peliculas = [
        "Toy Story",
        "Buscando a Nemo",
        "Monsters Inc",
        "Star Wars"
      ];

      $pelicula = $peliculas[$id];

      return view("detallePeliculas", compact("pelicula"));
    }
}
