<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdiomaController extends Controller
{
    public function cambiar(Request $request) {
    	$idioma = $request["idioma"];

    	session(["idioma" => $idioma]);

    	return back();
    }
}
