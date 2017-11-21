@extends("miPlantilla")

@section("principal")
  <h1>
    Detalle de {{$pelicula->title}}
  </h1>
  <ul>
    <li>
      Fecha de estreno: {{$pelicula->release_date}}
    </li>
    <li>
      Premio: {{$pelicula->awards}}
    </li>
    <li>
      Duracion: {{$pelicula->length}}
    </li>
    <li>
      <a href="/generos/{{$pelicula->genre->id}}">
        Genero: {{$pelicula->genre->name}}
      </a>
    </li>
    <li>
      Actores:
      <ul>
        @forelse ($pelicula->actors as $actor)
          <li>
            <a href="/actores/{{$actor->id}}">
              {{$actor->getNombreCompleto()}}
            </a>
          </li>
        @empty
          <p>No hay actores :(</p>
        @endforelse
      </ul>
    </li>
    @if (auth()->check())
      <form class="" action="/borrarPelicula" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$pelicula->id}}">
        <input type="submit" name="" value="Eliminar Película" class="btn btn-danger">
      </form>
    @endif
  </ul>
@endsection
