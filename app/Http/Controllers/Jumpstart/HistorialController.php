<?php

namespace App\Http\Controllers\Jumpstart;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Jumpstart\M_historial_accion;

class HistorialController extends Controller
{
    //
    public function index()
    {
        //
        $historial = M_historial_accion::
                select('operacion','descripcion', 'fecha', 'registro_afectado', 
                'valor_anterior', 'valor_nuevo', 'id_modulo', 'id_users')->paginate(5);
        return view("historial.index")->with('historial', $historial);
    }
}
