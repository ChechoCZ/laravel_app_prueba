<?php


Route::get('/', function () {
	$usuarios = DB::table('usuario')->get();
    return view('lista', compact('usuarios'));
})->name('lista');

//Route::get('lista', 'UsuarioController@index');

Route::get('crear_usuario', function () {
    return view('crear_usuario');
})->name('crear');

Route::get('editar_usuario/{id}', function ($id) {
	$usuario = DB::table('usuario')->where('id', $id)->first();    	
    return view('editar_usuario', ['usuario'=>$usuario]);
})->name('editar');

Route::resource('Usuario', 'UsuarioController');