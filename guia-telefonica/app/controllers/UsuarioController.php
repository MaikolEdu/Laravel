<?php 

class UsuarioController extends BaseController{

	public function formcrearusuario()
	{
		User::create(Input::all());
		return "Usuario Registrado";
	}

	public function formactualizarusuario()
	{
		$usuario = User::find(Input::get('id_usuario'));
		$usuario->nombres = Input::get('nombres');
		$usuario->apellidos = Input::get('apellidos');
		$usuario->save();
		return "Datos actualizados usuario";
	}

	public function crearusuario()
	{
		return View::make('usuario.crearusuario');
	}

	public function actualizarusuario($id_usuario)
	{
		$usuario = User::find($id_usuario);
		$nombres = $usuario->nombres;
		$apellidos = $usuario->apellidos;
		return View::make('usuario.actualizarusuario',array('nombres'=>$nombres, 'apellidos'=>$apellidos,'usuario'=>$id_usuario));

		// $usuario = User::find($id_usuario);
		// $usuario->nombres = 'usuario actualizado';
		// $usuario->apellidos = 'apellido actualizado';
		// $usuario->save();
		// return "Datos actualizados usuario";
	}

	public function detalleusuario($id_usuario)
	{
		$usuario = User::find($id_usuario);
		//return 'Mis nombres y apellidos son : '.$usuario->nombres.' '.$usuario->apellidos;
		return View::make('usuario.detalleusuario', array('dato' => $usuario ));
	}



}