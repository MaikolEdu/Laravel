@extends('layaout.base')

@section('contenido')
{{Form::open(array('url'=>'contacto/crear'))}}
{{Form::label('non-contacto','Nombre del Contacto')}}
{{Form::text('nombre')}}
{{Form::label('tel-contacto','Telefono')}}
{{Form::text('telefono')}}
{{Form::label('dir-contacto','Direccion')}}
{{Form::text('direccion')}}
{{Form::label('email-contacto','Email')}}
{{Form::email('email')}}
{{Form::hidden('usuario_id',$usuario)}}
{{Form::submit('Crear Contacto')}}
{{Form::close()}}
@stop