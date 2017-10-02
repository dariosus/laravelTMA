<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genero;

class GenerosController extends Controller
{
    public function listado() {
      if (!Auth::check()) {
        return redirect("login");
      }
      $generos = Genero::all();

      $datos = compact("generos");
      return view("listadoGeneros", $datos);
    }
}
