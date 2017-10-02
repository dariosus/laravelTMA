<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;
use App\Genero;
use Auth;
use Redirect;

class PeliculasController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
    }

    public function listado() {
      $peliculas = Pelicula::all();
      $usuario = Auth::user();

      return view("listadoPeliculas", compact("peliculas", "usuario"));
    }

    public function detalle($id) {
      $pelicula = Pelicula::find($id);
      $genero = Genero::find($pelicula->genre_id);

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
      /* Pelicula::create([
        "title" => $req["title"],
        "rating" => $req["rating"],
        "awards" => $req["awards"],
        "genre_id" => $req["genre"],
        "release_date" => $req["release_date"],
        "length" => $req["length"]
      ]); */
      //Pelicula::create($req->only("title", "rating", "awards", "genre_id", "release_date", "length"))


      $pelicula = new Pelicula;
      $pelicula->title = $req["title"];
      $pelicula->rating = $req["rating"];
      $pelicula->awards = $req["awards"];
      $pelicula->genre_id = $req["genre_id"];
      $pelicula->release_date =$req["release_date"];
      $pelicula->length = $req["length"];

      $pelicula->save();


      //4. Redirigir
      return redirect("/peliculas");
    }

    public function editar($id) {
      $pelicula = Pelicula::find($id);
      $generos = Genero::all();

      $datos = compact("pelicula", "generos");

      return view("editarPelicula", $datos);
    }

    public function actualizar(Request $req, $id) {
      $reglas = [
        "title" => "required|string",
        "awards" => "required|numeric|min:0",
        "release_date"=> "required|date",
        "rating"=> "required|numeric|min:0",
        "length" => "required|numeric|min:0|max:200"
      ];

      $mensajes = [
        "required" => "El campo :attribute es requerido",
        "min" => "El campo :attribute tiene un mínimo de :min",
      ];

      $this->validate($req, $reglas, $mensajes);

      $pelicula = Pelicula::find($id);
      $pelicula->title = $req["title"];
      $pelicula->rating = $req["rating"];
      $pelicula->awards = $req["awards"];
      $pelicula->genre_id = $req["genre_id"];
      $pelicula->release_date =$req["release_date"];
      $pelicula->length = $req["length"];

      $pelicula->save();


      //4. Redirigir
      return redirect("/peliculas");
    }

    public function eliminar($id) {
      $pelicula = Pelicula::find($id);

      $pelicula->delete();

      return redirect("/peliculas");
    }
}
