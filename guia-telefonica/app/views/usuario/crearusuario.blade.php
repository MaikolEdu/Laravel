@extends('layaout.base')

@section('contenido')
{{Form::open(array('url'=>'usuario/crear'))}}
{{Form::label('nombre','Nombre')}}
{{Form::text('nombres')}}
{{Form::label('apellido','Apellido')}}
{{Form::text('apellidos')}}
{{Form::label('d-n-i','DNI')}}
{{Form::text('dni')}}
{{Form::label('pass','Password')}}
{{Form::password('password')}}
{{Form::submit('Guardar')}}
{{Form::close()}}
@stop