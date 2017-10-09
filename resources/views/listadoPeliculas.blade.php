@extends("plantilla")

@section("css")
  <link rel="stylesheet" href="/css/peliculas.css">
@endsection

@section("contenido")
    <h1>Mis películas</h1>
    {{ $peliculas->links() }}
    @if ($usuario)
      <h2>Bienvenido {{$usuario->name}}</h2>
    @endif
    @if (!empty($peliculas))
      <ul>
        @foreach ($peliculas as $pelicula)
          <li>
            <a href="/peliculas/{{$pelicula->id}}">
              {{$pelicula->title}}
            </a>
          </li>
        @endforeach
      </ul>
      {{ $peliculas->links() }}
    @else
      <div class="">
        No hay peliculas
      </div>
    @endif
@endsection
