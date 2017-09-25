@extends("plantilla")

@section("contenido")

    <div class="container">
      <h1>Editando: {{$pelicula->title}}</h1>
      @if (count($errors) > 0)
        		<div class="alert alert-danger">
            		<ul>
    	            @foreach ($errors->all() as $error)
    	                <li>{{ $error }}</li>
    	            @endforeach
        		   </ul>
    	    </div>
    	@endif

      <form class="" action="/editarPelicula/{{$pelicula->id}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="">Titulo</label>
          <input class="form-control" type="text" name="title" value="{{$pelicula->title}}">
        </div>
        <div class="form-group">
          <label for="">Rating</label>
          <input class="form-control" type="text" name="rating" value="{{$pelicula->rating}}">
        </div>
        <div class="form-group">
          <label for="">Premios</label>
          <input class="form-control" type="text" name="awards" value="{{$pelicula->awards}}">
        </div>
        <div class="form-group">
          <label for="">Fecha de Estreno</label>
          <input class="form-control" type="date" name="release_date" value="{{$pelicula->release_date}}">
        </div>
        <div class="form-group">
          <label for="">Duracion</label>
          <input class="form-control" type="text" name="length" value="{{$pelicula->length}}">
        </div>
        <div class="form-group">
          <label for="">Genero</label>
          <select class="form-control" name="genre_id">
            @foreach ($generos as $genero)
              @if ($genero->id == $pelicula->genre_id)
                <option value="{{$genero->id}}" selected>
                  {{$genero->name}}
                </option>
              @else
                <option value="{{$genero->id}}">
                  {{$genero->name}}
                </option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <input class="btn btn-primary" type="submit" name="" value="Guardar Cambios">
        </div>
    </form>
    </div>

@endsection
