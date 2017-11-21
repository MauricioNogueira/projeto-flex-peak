<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestProfessor extends FormRequest
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
            'nome_professor' => 'bail|required',
            'data_nascimento' => 'bail|required',
            'id_curso' => 'bail|required',
        ];
    }

    public function messages(){
        return [
            'nome_professor.required' => 'Campo nome é obrigatório',
            'data_nascimento.required' => 'Campo data de nascimento é obrigatório',
            'id_curso.required' => 'Campo curso é obrigatório',
        ];
    }
}
