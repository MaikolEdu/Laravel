<?php

use Illuminate\Database\Migrations\Migration;

class CrearUsuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios',function($tabla){
			$tabla->increments('id');
			$tabla->string('nombres',50);
			$tabla->string('apellidos',70);
			$tabla->string('dni',8)->unique();
			$tabla->string('password');
			$tabla->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}

}