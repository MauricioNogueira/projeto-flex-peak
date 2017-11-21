<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestNota extends FormRequest
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
            'id_curso' => 'bail|required',
            'id_aluno' => 'bail|required',
            'nota_1' => 'bail|required',
            'nota_2' => 'bail|required',
            'nota_3' => 'bail|required',
            'nota_4' => 'bail|required',
            'id_professor' => 'bail|required',
        ];
    }

    public function messages(){
        return [
            'id_curso.required' => 'Campo Cursos é obrigatório',
            'id_aluno.required' => 'Campo Alunos é obrigatório',
            'id_professor.required' => 'Campo Professores é obrigatório',
            'nota_1.required' => 'Campo Nota 1 é obrigatório',
            'nota_2.required' => 'Campo Nota 2 é obrigatório',
            'nota_3.required' => 'Campo Nota 3 é obrigatório',
            'nota_4.required' => 'Campo Nota 4 é obrigatório',
            'id_curso.same' => 'Professor não corresponde com a matéria',
            'id_curso.unique' => 'Aluno já possui notas neste curso',
        ];
    }
}
