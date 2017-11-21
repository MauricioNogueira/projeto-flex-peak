<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormAlteraNota extends FormRequest
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
            'nota_1' => 'bail|required',
            'nota_2' => 'bail|required',
            'nota_3' => 'bail|required',
            'nota_4' => 'bail|required',
        ];
    }

    public function messages(){
        return [
            'nota_1.required' => 'Campo Nota 1 é obrigatório',
            'nota_2.required' => 'Campo Nota 2 é obrigatório',
            'nota_3.required' => 'Campo Nota 3 é obrigatório',
            'nota_4.required' => 'Campo Nota 4 é obrigatório',
        ];
    }
}
