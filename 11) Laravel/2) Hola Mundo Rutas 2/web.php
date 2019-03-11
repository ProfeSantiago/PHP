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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/primeraPrueba', function () {
    return view('pruebalaravel');
});

Route::get('/Rutas2', function () {
    return view('mensajeRuta', ['saludillo' => 'Segundo ejemplo de rutas']);
});

Route::get('/Rutas3', function () {
    return view('sinmensajeRuta');
});

Route::get('conparametro/{usuario}', function ($usuario) {
    return 'Usuario '.$usuario;
});


