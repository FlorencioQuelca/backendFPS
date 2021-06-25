<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSociedadAccidentalRequest extends FormRequest
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
            'nombre'=> "required|unique:sociedadAccidental,nombre|min:10|max:255",
            'nombreLegal'=> "required|min:10|max:255",
            'fono1'=> "required",
            'email'=> "required",
        ];
    }
}
