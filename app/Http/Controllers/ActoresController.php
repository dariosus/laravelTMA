<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;

class ActoresController extends Controller
{
    public function listado() {
      $actores = Actor::all();

      $info = compact("actores");

      return view("listadoActores", $info);
    }

    public function detalle($id) {
      $actor = Actor::find($id);

      $info = compact("actor");

      return view("detalleActor", $info);
    }

    public function buscar($busqueda) {
      $actores = Actor::where("first_name", "LIKE", "%$busqueda%")
        ->orderBy("first_name")
        ->get();

      $info = compact("actores");

      return view("listadoActores", $info);
    }
}
