<?php

namespace App\Http\Controllers\Jumpstart;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Jumpstart\Usuario_datos;

class AjaxController extends Controller
{
  
    public function index()
    {
        //
         return view("ajax.index");
    }

    public function listall()
    {
        //
        $users = Usuario_datos::all();
        
        return response()->json($users->toArray());
    }

}
