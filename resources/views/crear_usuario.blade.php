@extends('layout')

@section('contenido')   

    <div align="center">        

        <h3>Crear Usuario</h3>
        <hr>        

        <div class="container marketing" style="padding-top: 10px">

            {!! Form::open(['route'=>'Usuario.store', 'class'=>'form-horizontal']) !!}                            
                @include('plantillas.form')
                {!! Form::submit('Registrar', ['class'=>'btn btn-primary', 'id'=>'boton']) !!}
            {!! Form::close() !!}           

        </div>

    </div>

@stop        