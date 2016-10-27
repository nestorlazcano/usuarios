<?php

namespace App\Models\Jumpstart;

use Illuminate\Database\Eloquent\Model;

class Cat_usuario extends Model
{
    //
    protected $table= 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected  $fillable= ['id','name', 'password', 'email', 'id_rol'];


    public function m_rol()
    {
       // hasOne - tiene un
       return $this->hasOne(M_rol::class);
    }
        
    public function  datos_personales(){
        // belognsTo - pertenece a
        return $this->belongsTo(Datos_personales::class);
    }

    

}
