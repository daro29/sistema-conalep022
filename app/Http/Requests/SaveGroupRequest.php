<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveGroupRequest extends FormRequest
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
            'code'          =>  'required|string',
            'careers_id'    =>  '',
        ];
    }

    public function messages()
    {
        return [
            'careers_id.required' => 'Es necesario elegir una carreara para el grupo'
        ];

    }
}
