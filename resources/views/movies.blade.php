@extends("miPlantilla")

@section("principal")
    <h2>@lang("mensajes.tituloPeliculas")</h2>
    <ul>
      @foreach($peliculas as $pelicula)
        <li>
          <a href="/peliculas/{{$pelicula->id}}">
            {{$pelicula->title}}
          </a>
        </li>
      @endforeach
    </ul>
@endsection
