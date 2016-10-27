<?php

namespace App\Http\Requests\Rol;

use App\Http\Requests\Request;

class RolUpdateRequest extends Request
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
            'etiqueta' => 'required|min:3|unique:m_rol,etiqueta',
        ];
    }
    
    public function messages(){
        return[
            'etiqueta.required' => 'Escriba el Nombre.',
            'etiqueta.min' => 'El Nombre es muy corto.',
            'etiqueta.unique' => 'El Nombre ya existe.',
        ];
    }
}
