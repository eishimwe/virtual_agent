<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentRequest extends FormRequest
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

            'first_name'    =>'required',
            'last_name'     =>'required',
            'cellphone'     =>'required|not_in:0|digits:10|unique:agents,cellphone',
            'email'         =>'email|unique:agents,email',

        ];
    }
}
