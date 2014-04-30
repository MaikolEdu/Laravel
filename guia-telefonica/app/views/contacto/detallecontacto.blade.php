@extends('layaout.base')

@section('titulo')
Detalle del Contacto
@stop

@section('contenido')
	@parent
	{{ $dato->nombre }}
	<br>
	{{ $dato->email }}
@stop