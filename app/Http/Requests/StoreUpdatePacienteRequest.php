<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePacienteRequest extends FormRequest
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
            'Nome'=>'required|min:3|max:255',
            'Cpf'=>'required|min:3|max:255',
            'Rg'=>'required|min:3|max:255',
            'Foto'=>'nullable|nuimage',
        ];
    }

    public function messages()
    {
        return[
            'Nome.required' => 'Nome é obrigatório',
            'Cpf.required' => 'Cpf é obrigatório',
            'Rg.required' => 'Rg é obrigatório',
        ];
    }
}
