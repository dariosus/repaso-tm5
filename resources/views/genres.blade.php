@extends("miPlantilla")

@section("principal")
    <h2>Mis Géneros</h2>
    <ul>
      @foreach($generos as $genero)
        <li>
          <a href="/generos/{{$genero->id}}">
            {{$genero->name}}
          </a>
        </li>
      @endforeach
    </ul>
@endsection
