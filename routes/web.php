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

/*INDEX*/
Route::get('/', function () {
    return view('/principal/index');
});

/*ACERCA DE*/
Route::get('/acerca_de', function () {
    return view('/principal/acercade');
});

/*CONTACTO*/
Route::get('/contacto', function () {
    return view('/principal/contacto');
});


/*PROYECTOS*/
Route::get('/proyectos', function () {
    return view('/principal/proyectos');
});