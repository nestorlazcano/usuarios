<?php

namespace App\Models\Jumpstart;

use Illuminate\Database\Eloquent\Model;

class M_rol extends Model
{
    //
    protected $table = 'm_rol';
    protected $primaryKey = 'id_rol';
    public $timestamps = false;
    protected $fillable = [
       'id_rol','etiqueta'
    ];

    public function cat_usuario()
    {
       // belongsto - pertenece a
       return $this->belongsTo(Cat_usuario::class);
    }
    
    public function m_accion()
    {
       // belongsto - pertenece a
       return $this->belongsToMany(M_accion::class);
    }
}
