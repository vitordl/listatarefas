<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class testeRequest extends FormRequest
{
   
   
    public function rules()
    {
        return [
            'usuario' => ['required', 'max:10', 'min:3' ],
            'senha' => ['required', 'max:20', 'min:5']
        ];
    }

    public function messages(){
        return[
            'usuario.required' => 'Usuário é requerido.',
            'usuario.max' => 'Usuário só pode ter no maximo 10 caracteres.',
            'usuario.min' => 'Usuário precisa ter no minimo 3 caracteres.',
            'senha.required' => 'Senha é requerida.',
            'senha.max' => 'Senha só pode ter no maximo 20 caracteres.',
            'senha.min' => 'A quantidade minima de caracteres para a senha é 5.'
        ];
    }
}
