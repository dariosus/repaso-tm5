@extends("miPlantilla")

@section("principal")
  <h1>
    Detalle de {{$genero->name}}
  </h1>
  <ul>
    <li>
      Ranking: {{$genero->ranking}}
    </li>
    <li>
      Peliculas:
      <ul>
        @foreach($genero->movies as $pelicula)
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
