@extends("plantilla")

@section("css")
  <link rel="stylesheet" href="/css/peliculas.css">
@endsection

@section("contenido")
    <h1>Mis películas</h1>
    @if (!empty($generos))
      <ul>
        @foreach ($generos as $genero)
          <li>
            <a href="/genero/{{$genero->id}}">
              {{$genero->name}}
            </a>
            <ul>
              @foreach ($genero->peliculas as $pelicula)
                <li>
                  {{$pelicula->title}}
                </li>
              @endforeach
            </ul>
          </li>
        @endforeach
      </ul>
    @else
      <div class="">
        No hay generos
      </div>
    @endif
@endsection
