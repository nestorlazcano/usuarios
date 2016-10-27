<?php

namespace App\Http\Controllers\Jumpstart;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Jumpstart\Cat_usuario;
use App\Models\Jumpstart\M_rol;
use App\Models\Jumpstart\Usuario_datos;
use App\User;
use App\Http\Requests\Usuario\UsuarioCreateRequest;
use App\Http\Requests\Usuario\UsuarioUpdateRequest;
use App\Models\Jumpstart\Datos_personales;
use Session;
use DB;


class AdminController extends Controller {

    //
    

    public function index() {
        $users = Usuario_datos::
                select('id_usuario','nombre', 'apellido_paterno', 'apellido_materno', 'usuario', 'correo', 'etiqueta')->paginate(5);
        return view("layouts.index")->with('usuarios', $users);
    }

    public function create() {
        $rol = M_rol::lists('etiqueta', 'id_rol')->prepend('Selecciona el rol');
        return view("layouts.create")->with('roles', $rol);
    }

    public function store(UsuarioCreateRequest $request) {
        //DB::transaction(function(){  
        $data_usuario = [ 
            'name' => $request['usuario'], 
            'email' => $request['correo'], 
            'password' => bcrypt($request['password']), 
            'id_rol' => $request['id_rol']];
        
        $envio = Cat_usuario::create($data_usuario);
        //$id_usuario = DB::table('users')->insertGetId( $data_usuario );
        $id_usuario = $envio->id;
        $data_datos = [ 
            'id_usuario' => $id_usuario, 
            'nombre' => $request['nombre'], 
            'apellido_paterno' => $request['apellido_paterno'], 
            'apellido_materno' => $request['apellido_materno']];
        
        Datos_personales::create($data_datos);
        //});
        Session::flash('save', 'Operación Exitosa!');
        return redirect()->route('users.index');
       
    }

    public function edit($id) {
        $rol = M_rol::lists('etiqueta', 'id_rol')->prepend('Selecciona el rol');
        $usuarios = Cat_usuario::FindOrFail($id);
        $datos = Datos_personales::FindOrFail($id);
        return view('layouts.edit', array('usuarios' => $usuarios, 'datos' => $datos, 'roles' => $rol));
    }

    public function update(UsuarioUpdateRequest $request, $id) {
        $usuarios = Cat_usuario::FindOrFail($id);
        $datos = Datos_personales::FindOrFail($id);
        $input_datos = $request->all();
        $input_usuarios = [
            'name' => $request['usuario'], 
            'email' => $request['correo'], 
            'password' => bcrypt($request['password']), 
            'id_rol' => $request['id_rol']];
        
        $usuarios->fill($input_usuarios)->save();
        $datos->fill($input_datos)->save();
        Session::flash('update', 'Operación Exitosa!');
        return redirect()->route('users.index');
    }

    public function show($id) {
        $users = Usuario_datos::
                select('id_usuario', 'usuario', 'correo', 'etiqueta', 'nombre', 'apellido_paterno', 'apellido_materno')->where('usuario_datos.id_usuario', '=', $id)->first();
        return view("layouts.show")->with('usuarios', $users);
    }

    public function destroy($id) {
        $datos = Datos_personales::FindOrFail($id);
        $datos->delete();
        $usuarios = Cat_usuario::FindOrFail($id);
        $usuarios->delete();
        Session::flash('delete', 'Operación Exitosa!');
        return redirect()->route('users.index');
    }

}
