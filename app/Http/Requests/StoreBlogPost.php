<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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
            'name' => 'required|string|min:3|max:30',
            'lastname' =>'required|string|max:30',
            'phone' =>'numeric|regex:/^[\d]{0,}(.[\d]{2})?$/|nullable',
        ];
    }



    public function messages()
{
        return [
            'lastname.required'=>'El campo Apellidos es obligatorio.',
            'name.string'=>'Debes escribir texto',
            'phone.numeric'=>'Debes introducir un número de teléfono correcto',
            'phone.regex'=>'Debes introducir un número de teléfono correcto',
            'max'=>'Número máximo de caracteres',
            'min'=>'Número mínimo de caracteres'
        ];
}


}
