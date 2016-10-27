<?php

namespace App\Models\Jumpstart;

use Illuminate\Database\Eloquent\Model;

class M_accion extends Model
{
     //
    protected $table= 'm_accion';
    protected $primaryKey = ['id_accion', 'id_modulo', 'id_rol'];
    public $timestamps = false;
    protected  $fillable= ['id_accion','etiqueta', 'descripcion', 'id_modulo', 'id_rol'];


    public function m_modulo()
    {
       // hasOne - tiene un
       return $this->belongsToMany(M_modulo::class);
    }
    
    public function m_rol()
    {
       // hasOne - tiene un
       return $this->belongsToMany(M_rol::class);
    }
}
