<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenresController extends Controller
{
    public function index() {
      $generos = Genre::all();

      return view("genres", compact("generos"));
    }

    public function show($id) {
      $genero = Genre::find($id);

      return view("detalleGenre", compact("genero"));
    }
}
