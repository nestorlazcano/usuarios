<?php

namespace App\Models\Jumpstart;

use Illuminate\Database\Eloquent\Model;

class M_historial_accion extends Model
{
    //
    protected $table= 'm_historial_accion';
    protected $primaryKey = ['id_historial_accion'];
    public $timestamps = false;
    protected  $fillable= [
        'operacion','descripcion', 'fecha', 'registro_afectado', 
        'valor_anterior', 'valor_nuevo', 'id_modulo', 'id_users'];


    
}
