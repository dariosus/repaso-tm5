<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class ApiController extends Controller
{
	public function crearPelicula(Request $request) {
		//Validacion 
		//Creacion
	}

    public function peliculas() {
    	$peliculas = Movie::all();

    	return $peliculas;
    }

    public function detallePeli($id) {
    	$pelicula = Movie::find($id);

    	$miVar = [
    		"pelicula" => $pelicula,
    		"activa" => true
    	];

    	return json_encode($miVar);
    }
}
