<?php

/*
|-----------------------------------------------------------------------
| Application Routes
|-----------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('crearusuario','UsuarioController@crearusuario');
Route::get('actualizarusuario/{id_usuario}','UsuarioController@actualizarusuario');
Route::get('detalleusuario/{id_usuario}','UsuarioController@detalleusuario');
Route::get('usuario/{id_usuario}/crearcontacto','ContactoController@crearcontacto');
Route::get('usuario/{id_usuario}/actualizarcontacto/{id_contacto}','ContactoController@actualizarcontacto');
Route::get('usuario/{id_usuario}/eliminarcontacto/{id_contacto}','ContactoController@eliminarcontacto');
Route::get('usuario/{id_usuario}/listarcontactos','ContactoController@listarcontacto');
Route::get('usuario/{id_usuario}/detallecontacto/{id_contacto}','ContactoController@detallecontacto');

Route::post('usuario/crear','UsuarioController@formcrearusuario');
Route::post('usuario/actualizar','UsuarioController@formactualizarusuario');
Route::post('contacto/crear','ContactoController@formcrearcontacto');
Route::post('contacto/actualizar','ContactoController@formactualizarcontacto');