<?php

namespace App\Models\Jumpstart;

use Illuminate\Database\Eloquent\Model;

class Usuario_datos extends Model
{
    //Vistas de usuarios y sus datos
    protected $table = 'usuario_datos';
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
       'id_usuario','nombre','apellido_paterno','apellido_materno','usuario','correo','etiqueta'
    ];
}
