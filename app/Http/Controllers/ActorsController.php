<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorsController extends Controller
{
    public function index() {
      $actores = Actor::all();

      return view("actors", compact("actores"));
    }

    public function show($id) {
      $actor = Actor::find($id);

      return view("detalleActor", compact("actor"));
    }
}
