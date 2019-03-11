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

Route::get('/miformcorreo', function () {
    return view('formulario2');
});

Route::post('mensajecorreo', function(){
	
	$data = request()->all();
	
	Mail::send("mensajemail", $data, function($message) use ($data){
		$message->from($data['email'], $data['nombre'])
				->to('unibitec@gmail.com','Santiago')
				->subject($data['asuntirijillo']);
	});
	
    return back()->with('flash',$data['nombre'].', mensaje enviado satisfactoriamente');
})->name('mensajecorreo');
