<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConverterRequest extends FormRequest
{
    /**
     * Определить авторизован ли пользователь делать такой запрос.
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
            'octal_number_system' => 'required|octal_number_system'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'octal_number_system.required' => 'Необходимо вести троичное число',
            'octal_number_system.octal_number_system' => 'Троичное число должно содержать только цифры 0,1,2'
        ];
    }
}
