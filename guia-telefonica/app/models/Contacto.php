<?php

class Contacto extends Eloquent {

	protected $fillable = array('nombre', 'telefono','direccion', 'email','usuario_id');
	
	public function usuario()
	{
		return $this->belongsTo('User');
	}

}