<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use Curl;

class MoviesController extends Controller
{
    public function delete(Request $r) {
      $id = $r["id"];

      $pelicula = Movie::find($id);

      $pelicula->delete();

      return redirect("/peliculas");
    }

    public function store(Request $r) {

      $reglas = [
        "titulo" => "required|string|min:3|unique:movies,title",
        "rating" => "required|numeric|min:0|max:0",
        "duracion" => "required|integer|min:0",
        "premios" => "required|integer|min:0",
        "fecha_de_estreno" => "required|date",
        "poster" => "required|image"
      ];

      $this->validate($r, $reglas);

      $pelicula = new Movie();
      $pelicula->title = $r["titulo"];
      $pelicula->rating = $r["rating"];
      $pelicula->length = $r["duracion"];
      $pelicula->awards = $r["premios"];
      $pelicula->release_date = $r["fecha_de_estreno"];
      $pelicula->genre_id = $r["genero"];

      $poster = $r->file("poster");
      $nombrePoster = $poster->store("public/posters");
      $nombrePoster = str_replace("public", "storage", $nombrePoster);

      $pelicula->poster = $nombrePoster;

      $pelicula->save();

      return redirect("/peliculas/" . $pelicula->id);
    }

    public function add() {
      $generos = Genre::all();

      $paises = Curl::to('https://restcountries.eu/rest/v2/all')->asJson()->get();

      //dd($paises);

      return view("agregarPelicula", compact("generos", "paises"));
    }

    public function search(Request $r) {
      $buscar = $r["buscar"];

      $peliculas = Movie::where("title", "LIKE", "%$buscar%")
        ->orderBy("title")
        ->get();

      return view("movies", compact("peliculas"));
    }

    public function index() {
      $peliculas = Movie::all();

      return view("movies", compact("peliculas"));
    }

    public function show($id) {
      $pelicula = Movie::find($id);

      return view("detalleMovie", compact("pelicula"));
    }
}
