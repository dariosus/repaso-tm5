@extends("miPlantilla")

@section("css")
  <link rel="stylesheet" href="/css/actores.css">
@endsection

@section("principal")
    <h2>Mis Actores</h2>
    <ul>
      @foreach($actores as $actor)
        <li>
          <a href="/actores/{{$actor->id}}">
            {{$actor->getNombreCompleto()}}
          </a>
        </li>
      @endforeach
    </ul>
@endsection
