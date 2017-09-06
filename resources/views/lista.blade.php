@extends('layout')

@section('contenido')

	@if(Session()->has('flash_message'))
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          {{ Session::get('flash_message') }}
        </div>
    @endif

    @if(Session()->has('flash_message_error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          {{ Session::get('flash_message_error') }}
        </div>
    @endif

    <div align="center">        

        <h3>Crear Usuario</h3>
        <hr>        

        <div class="container marketing" style="padding-top: 10px">

            {!! Form::open(['route'=>'Usuario.store', 'class'=>'form-horizontal']) !!}
            	{{ csrf_field() }}
                @include('plantillas.form')
                {!! Form::submit('Registrar', ['class'=>'btn btn-primary', 'id'=>'boton']) !!}
            {!! Form::close() !!}           

        </div>

    </div>

	<div align="center">
		<h3>Usuarios Registrados</h3>
		<hr>
	</div>

	<br>

	<div class="container">
		<table class="table">
			<thead>
				<th>Nombre(s)</th>
				<th>Apellidos</th>
				<th>Cedula</th>
				<th>Correo</th>
				<th>Telefono</th>
				<th></th>
			</thead>
			@foreach($usuarios as $usuario)
			<tbody>
				<td>{{ $usuario->nombres }}</td>
				<td>{{ $usuario->apellidos }}</td>
				<td>{{ $usuario->cedula }}</td>
				<td>{{ $usuario->correo }}</td>
				<td>{{ $usuario->telefono }}</td>
				<td>{!! link_to_route('editar', $title = 'Editar', $parameters = $usuario->id, $attributes = ['class'=>'btn btn-primary']); !!}</td>
			</tbody>
			@endforeach
		</table>
	</div>

@stop