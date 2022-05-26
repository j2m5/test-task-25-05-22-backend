<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
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
            'name' => 'required|min:3|max:20',
            'phone' => 'required|digits:11'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Имя обязательно',
            'name.min' => 'Имя должно содержать не менее :min символа(ов)',
            'name.max' => 'Имя должно содержать не более :max символа(ов)',
            'phone.required' => 'Телефон обязателен',
            'phone.digits' => 'Телефон должен состоять из чисел и содержать :digits символа(ов)'
        ];
    }
}
