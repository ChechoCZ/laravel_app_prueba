@extends('layout')

@section('contenido')    

    <div align="center">        

        <h3>Editar Usuario</h3>
        <hr>        

        <div class="container marketing" style="padding-top: 10px">

            {!! Form::model($usuario,['route' => ['Usuario.update', $usuario->id], 'method'=>'PUT', 'class'=>'form-horizontal']) !!}
                @include('plantillas.form')                
                {!! Form::submit('Editar', ['class'=>'btn btn-primary', 'id'=>'boton']) !!}
            {!! Form::close() !!}           

        </div>

    </div>

@stop    