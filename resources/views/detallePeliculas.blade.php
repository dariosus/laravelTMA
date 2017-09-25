@extends("plantilla")

@section("contenido")
  <h1>Elegiste la película {{$pelicula->title}}</h1>
  <a href="/editarPelicula/{{$pelicula->id}}">
    <button type="button" name="button">Editar</button>
  </a>
  <a href="/eliminarPelicula/{{$pelicula->id}}">
    <button type="button" name="button">Eliminar</button>
  </a>
@endsection
