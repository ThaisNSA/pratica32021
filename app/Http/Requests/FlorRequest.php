<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlorRequest extends FormRequest
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
            'nome' => 'bail|required|min:4|max:100',
            'cor' => 'bail|required|min:4|max:50',
            'preco' => 'bail|required|min:1|max:50'
        ];
    }
}
