<?php

namespace App\Models\Jumpstart;

use Illuminate\Database\Eloquent\Model;

class Datos_personales extends Model
{
    //
    protected $table= 'datos_personales';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;
    protected  $fillable= ['id_usuario','nombre', 'apellido_paterno', 'apellido_materno'];


    public function cat_usuario()
    {
       // hasone - tiene un 
       return $this->hasOne(Users::class);
    }
}
