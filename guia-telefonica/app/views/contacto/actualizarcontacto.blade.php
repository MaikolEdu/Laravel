@extends('layaout.base')

@section('contenido')
{{Form::open(array('url'=>'contacto/actualizar'))}}
{{Form::label('non-contacto','Nombre del Contacto')}}
{{Form::text('nombre',$nombre)}}
{{Form::label('tel-contacto','Telefono')}}
{{Form::text('telefono',$telefono)}}
{{Form::label('email-contacto','Email')}}
{{Form::email('email',$email)}}
{{Form::label('dir-contacto','Direccion')}}
{{Form::text('direccion',$direccion)}}
{{Form::hidden('id_contacto',$contacto)}}
{{Form::submit('Actualizar Contacto')}}
{{Form::close()}}
@stop