<div class="form-group">
    {!! Form::label('Nombre:', null, ['class'=>'control-label col-sm-2']) !!}
    <div class="col-sm-10">
        {!! Form::text('nombres', null, ['class'=>'form-control', 'placeholder'=>'Ingrese su nombre']) !!}
    </div>    
</div>
<div class="form-group">
    {!! Form::label('Apellido:', null, ['class'=>'control-label col-sm-2']) !!}
    <div class="col-sm-10">
        {!! Form::text('apellidos', null, ['class'=>'form-control', 'placeholder'=>'Ingrese sus apellidos']) !!} 
    </div>   
</div>
<div class="form-group">
    {!! Form::label('Cédula:', null, ['class'=>'control-label col-sm-2 form_letters']) !!}
    <div class="col-sm-10">
        {!! Form::text('cedula', null, ['class'=>'form-control', 'placeholder'=>'Ingrese su cedula', 'id'=>'form_cedula']) !!}
        <td><span class="error_form" id="cedula_error_message"></span></td>
        <td><span class="error_form" id="cedula_duplicada"></span></td>
    </div>
</div>
<div class="form-group">
    {!! Form::label('Correo:', null, ['class'=>'control-label col-sm-2']) !!}
    <div class="col-sm-10">
        {!! Form::text('correo', null, ['class'=>'form-control', 'placeholder'=>'Ingrese su correo', 'id'=>'form_email']) !!}
        <td><span class="error_form" id="email_error_message"></span></td>
    </div>
</div>
<div class="form-group">
    {!! Form::label('Telefono:', null, ['class'=>'control-label col-sm-2']) !!}
    <div class="col-sm-10">
        {!! Form::text('telefono', null, ['class'=>'form-control', 'placeholder'=>'Ingrese su telefono', 'id'=>'form_telefono']) !!}
        <td><span class="error_form" id="telefono_error_message"></span></td>
    </div>
</div>