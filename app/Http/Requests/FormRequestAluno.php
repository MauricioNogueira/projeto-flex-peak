<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestAluno extends FormRequest
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
            'nome_aluno' => 'bail|required',
            'data_nascimento' => 'bail|required',
            'cep' => 'bail|required|digits:8',
            'logradouro' => 'bail|required',
            'bairro' => 'bail|required',
            'cidade' => 'bail|required',
            'estado' => 'bail|required',
            'numero' => 'bail|required',
        ];
    }

    public function messages(){

        return [
            'nome_aluno.required' => "Campo nome é obrigatório",
            'data_nascimento.required' => "Campo data de nascimento é obrigatório",
            'cep.required' => "Campo CEP é obrigatório",
            'logradouro.required' => "Campo logradouro é obrigatório",
            'bairro.required' => "Campo bairro é obrigatório",
            'cidade.required' => "Campo cidade é obrigatório",
            'estado.required' => "Campo estado é obrigatório",
            'numero.required' => "Campo número da residência é obrigatório",
            'cep.digits' => 'CEP inválido',
        ];
    }
}
