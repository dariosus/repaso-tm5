@extends("miPlantilla")

@section("principal")
  <h1>Agregar Película</h1>
  @if (count($errors) > 0)
      		<div class="alert alert-danger">
          		<ul>
  	            @foreach ($errors->all() as $error)
  	                <li>{{ $error }}</li>
  	            @endforeach
      		   </ul>
  	    </div>
  	@endif
  <form class="" action="/agregarPelicula" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
      <label for="titulo">
        Titulo
      </label>
      <input type="text" name="titulo" value="{{old("titulo")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="Rating">
        Rating
      </label>
      <input type="text" name="rating" value="{{old("rating")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="premios">
        Premios
      </label>
      <input type="text" name="premios" value="{{old("premios")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="duracion">
        Duracion
      </label>
      <input type="text" name="duracion" value="{{old("duracion")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="fecha_de_estreno">
        Fecha de estreno
      </label>
      <input type="date" name="fecha_de_estreno" value="{{old("fecha_de_estreno")}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="poster">
        Poster
      </label>
      <input type="file" name="poster" value="" class="form-control">
    </div>
    <div class="form-group">
      <label for="genero">
        Género
      </label>
      <select class="form-control" name="genero">
        @foreach($generos as $genero)
          @if ($genero->id == old("genero"))
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
      <input type="submit" class="btn btn-primary" value="Agregar Película">
    </div>
  </form>
@endsection
