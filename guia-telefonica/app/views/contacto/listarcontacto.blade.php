@extends('layaout.base')

@section('titulo')
Listar Contactos
@stop

@section('contenido')
	@foreach($datos as $dato)
		<p> {{ $dato }}</p>
	@endforeach

@stop