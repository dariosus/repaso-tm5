@extends("miPlantilla")

@section("css")
  <link rel="stylesheet" href="/css/actores.css">
@endsection

@section("principal")
  <h1>
    Detalle de {{$actor->getNombreCompleto()}}
  </h1>
  <ul>
    <li>
      Nombre: {{$actor->first_name}}
    </li>
    <li>
      Apellido: {{$actor->last_name}}
    </li>
    <li>
      Películas:
      <ul>
      @foreach($actor->movies as $pelicula)
        <li>
          <a href="/peliculas/{{$pelicula->id}}">
            {{$pelicula->title}}
          </a>
        </li>
      @endforeach
      </ul>
    </li>
  </ul>
@endsection
