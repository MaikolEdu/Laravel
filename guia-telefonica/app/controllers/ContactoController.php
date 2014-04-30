<?php

class ContactoController extends BaseController{

	public function formcrearcontacto()
	{
		Contacto::create(Input::all());
		$id = Input::get('usuario_id');
		return Redirect::to('usuario/'.$id.'/listarcontactos');
	}

	public function formactualizarcontacto()
	{
		$contacto = Contacto::find(Input::get('id_contacto'));
		$contacto->nombre = Input::get('nombre');
		$contacto->telefono = Input::get('telefono');
		$contacto->email = Input::get('email');
		$contacto->direccion = Input::get('direccion');
		$contacto->save();
		return "Datos actualizados contacto";
	}

	public function crearcontacto($id_usuario){
		
		return View::make('contacto.crearcontacto', array('usuario'=>$id_usuario ));

		// $usuario = User::find($id_usuario);
		// $contacto = new Contacto;
		// $contacto->nombre = 'Contacto1';
		// $contacto->telefono = '945737373';
		// $contacto->email = 'contacto@correo.com';
		// $contacto->direccion = 'direccion contacto';
		// $contacto->usuario()->associate($usuario);
		// $contacto->save();
		// return Redirect::to('usuario/'.$id_usuario.'/listarcontactos');
	}

	public function actualizarcontacto($id_usuario,$id_contacto){
		$contacto = Contacto::find($id_contacto);
		$nombre = $contacto->nombre;
		$telefono = $contacto->telefono;
		$email = $contacto->email;
		$direccion = $contacto->direccion;
		return View::make('contacto.actualizarcontacto',
							array(  'nombre'=>$nombre,
							    	'telefono'=>$telefono,
									'email'=>$email,
									'direccion'=>$direccion,
									'contacto'=>$id_contacto
								));
		// $contacto = Contacto::find($id_contacto);
		// $contacto->nombre = 'actualizar Contacto1';
		// $contacto->email = 'contactoactualizado@correo.com';
		// $contacto->save();
		// return "Datos actualizados contacto";
	}

	public function eliminarcontacto($id_usuario,$id_contacto){
		$usuario = User::find($id_usuario);
		$contacto = Contacto::find($id_contacto);
		$contacto->delete();
		return "Contacto Eliminado";
	}

	public function listarcontacto($id_usuario){
		$usuario = User::find($id_usuario);
		$contactos = $usuario->contacto;
		$datos = $contactos->lists('nombre');
		return View::make('contacto.listarcontacto',array('datos' =>$datos));
	}

	public function detallecontacto($id_usuario,$id_contacto){
		$contacto = Contacto::find($id_contacto);
		return View::make('contacto.detallecontacto',array('dato'=> $contacto));
	}

}