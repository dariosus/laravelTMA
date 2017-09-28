@extends("plantilla")

@section("contenido")
  <h1>Elegiste la película {{$pelicula->title}}</h1>
  <ul>
    <li>
      Rating: {{$pelicula->rating}}
    </li>
    <li>Duracion: {{$pelicula->length}}</li>
    <li>Fecha de estreno: {{$pelicula->release_date}}</li>
    <li>
      Genero: {{$pelicula->genero->name}}
    </li>
    <li>
      Actores:
      <ul>
        @foreach ($pelicula->actores as $actor)
          <li>{{$actor->first_name}} {{$actor->last_name}}</li>
        @endforeach
      </ul>
    </li>

  </ul>
  <a href="/editarPelicula/{{$pelicula->id}}">
    <button type="button" name="button">Editar</button>
  </a>
  <a href="/eliminarPelicula/{{$pelicula->id}}">
    <button type="button" name="button">Eliminar</button>
  </a>
@endsection
