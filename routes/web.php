<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/registrarAdmin", "AdminController@add")->middleware("admin");
Route::post("/registrarAdmin", "AdminController@store")->middleware("admin");

Route::get("/cambiarIdioma", "IdiomaController@cambiar");

Route::get("/actores", "ActorsController@index");
Route::get("/actores/{id}", "ActorsController@show");

Route::get("/peliculas", "MoviesController@index");
Route::get("/peliculas/{id}", "MoviesController@show");
Route::get("/buscarPeliculas", "MoviesController@search");

Route::get("/agregarPelicula", "MoviesController@add")->middleware("auth");
Route::post("/agregarPelicula", "MoviesController@store")->middleware("auth");

Route::post("/borrarPelicula", "MoviesController@delete")->middleware("auth");

Route::get("/generos", "GenresController@index");
Route::get("/generos/{id}", "GenresController@show");

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
