<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DH Movies</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/micss.css">
    @yield("css")
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li>
            <a href="/peliculas">
              Películas
            </a>
          </li>
          <li>
            <a href="/generos">
              Generos
            </a>
          </li>
          <li>
            <a href="/actores">
              Actores
            </a>
          </li>
          @if (auth()->check())
            <li>
              Hola {{auth()->user()->name}}
            </li>
            <li>
              <a href="/agregarPelicula">
                Agregar Película
              </a>
            </li>
            <li>
              <form class="" action="/logout" method="post">
                {{csrf_field()}}
                <input type="submit" name="" value="Logout" class="btn btn-link">
              </form>
            </li>
          @else
            <li>
              <a href="/register">
                Registrate
              </a>
            </li>
            <li>
              <a href="/login">
                Ingresá
              </a>
            </li>

          @endif
          <li>
            <form class="buscar" action="/buscarPeliculas" method="GET">
              <input type="text" name="buscar" value="" class="form-control buscador">
              <input type="submit" name="" value="Buscar" class="btn btn-default">
            </form>
          </li>
          <li>
            <form class="buscar" action="/cambiarIdioma" method="GET">
              <select name="idioma" class="form-control">
                <option value="es">Español</option>
                <option value="en">English</option>
                <option value="it">Italian</option>
              </select>
              <input type="submit" name="" value="Cambiar Idioma" class="btn btn-primary">
            </form>
          </li>
        </ul>
      </nav>
    </header>
    <div class="container">
      <div class="jumbotron">
        <h1>
          <marquee>@lang("mensajes.principal")</marquee>
        </h1>
      </div>
      <div class="">
        @yield("principal")
      </div>
    </div>
    <footer>
      <div class="text-muted">
        2017, DH - FOOTER
      </div>
    </footer>
  </body>
</html>
