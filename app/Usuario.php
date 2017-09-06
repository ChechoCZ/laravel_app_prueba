<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nombres','apellidos','cedula','correo','telefono',];
    protected $guarded = ['id',];
    protected $table = 'usuario';
}
