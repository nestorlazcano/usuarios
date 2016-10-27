<?php

namespace App\Http\Requests\Usuario;

use App\Http\Requests\Request;

class UsuarioCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'nombre' => 'required|min:3',
            'correo' => 'required|email|unique:users,email',
            'password' => 'required|min:5',
            'id_rol' => 'required|not_in:0',
            'usuario' => 'required|min:3|unique:users,name',
            'apellido_paterno' => 'required|min:3',
            'apellido_materno' => 'required|min:3',

        ];
    }

    public function messages(){
        return[
            'nombre.required' => 'Escriba el Nombre.',
            'nombre.min' => 'El Nombre es demasiado corto.',
            'correo.required' => 'Escriba un Correo.',
            'correo.email' => 'Escriba un Correo valido.',
            'correo.unique' => 'El Correo que escribio ya se encuentra registrado.',
            'password.required' => 'Escriba una Contraseña.',
            'password.min' => 'La Contraseña es muy corta.',
            'id_rol.not_in' => 'Selecciona un Rol.',
            'usuario.required' => 'Escriba el Nombre de Usuario.',
            'usuario.min' => 'El Nombre de Usuario es demasiado corto.',
            'usuario.unique' => 'El Usuario ya se encuentra registrado',
            'apellido_paterno.required' => 'Escriba el Apellido Paterno.',
            'apellido_paterno.min' => 'El Apellido Paterno es demasiado corto.',
            'apellido_materno.required' => 'Escriba el Apellido Materno.',
            'apellido_materno.min' => 'El Apellido Materno es demasiado corto.',
        ];
    }
}
