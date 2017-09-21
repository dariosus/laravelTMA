@extends("plantilla")

@section("css")
  <link rel="stylesheet" href="/css/peliculas.css">
@endsection

@section("contenido")
    <h1>Actores</h1>
    @foreach ($actores as $actor)
      <li>
        <a href="/actores/{{$actor->id}}">
          {{$actor->getNombreCompleto()}}
        </a>
      </li>
    @endforeach

@endsection
