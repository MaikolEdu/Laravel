@extends('layaout.base')

@section('titulo')
Detalle del Usuario
@stop

@section('contenido')
	@parent
	{{ $dato->nombres }}
	<br>
	{{ $dato->apellidos }}
@stop