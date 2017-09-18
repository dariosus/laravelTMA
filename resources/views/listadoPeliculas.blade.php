@extends("plantilla")

@section("css")
  <link rel="stylesheet" href="/css/peliculas.css">
@endsection

@section("contenido")
    <h1>Mis películas</h1>
    @if (!empty($peliculas))
      <ul>
        @foreach ($peliculas as $clave => $pelicula)
          <li>
            <a href="/peliculas/{{$clave}}">
              {{$pelicula}}
            </a>
          </li>
        @endforeach
      </ul>
    @else
      <div class="">
        No hay peliculas
      </div>
    @endif
@endsection
