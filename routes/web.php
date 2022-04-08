<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('prueba1', function () {
    return view('prueba1');
});
/*
Route::get('prueba2', function () {
    return view('prueba2');
});*/
//Esto de abajo es lo mismo que el de arriba pero mas compacto
Route::view("prueba2","prueba2");

Route::view("about","about");
Route::view("noticias","noticias");
Route::view("pruebaPrincipal","pruebaPrincipal");
