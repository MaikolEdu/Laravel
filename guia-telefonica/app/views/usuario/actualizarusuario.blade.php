@extends('layaout.base')

@section('contenido')
{{Form::open(array('url'=>'usuario/actualizar'))}}
{{Form::label('nombre','Nombre')}}
{{Form::text('nombres',$nombres)}}
{{Form::label('apellido','Apellido')}}
{{Form::text('apellidos',$apellidos)}}
{{Form::hidden('id_usuario',$usuario)}}
{{Form::submit('Actualizar')}}
{{Form::close()}}
@stop