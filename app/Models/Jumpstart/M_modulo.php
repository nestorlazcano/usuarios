<?php

namespace App\Models\Jumpstart;

use Illuminate\Database\Eloquent\Model;

class M_modulo extends Model
{
    //
    protected $table= 'm_modulo';
    protected $primaryKey = 'id_modulo';
    public $timestamps = false;
    protected  $fillable= ['id_modulo','etiqueta', 'descripcion'];


    public function m_accion()
    {
       // hasOne - tiene un
       return $this->belongsToMany(M_accion::class);
    }
        
}
