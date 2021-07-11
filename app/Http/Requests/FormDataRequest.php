<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormDataRequest extends FormRequest
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
            'name' => ['required', 'min:4', 'max:20'],
            'age' => ['required', 'numeric'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:20'],
        ];
    }

    public function messages()
    {
        return [
        'required' => 'هذا الحقل مطلوب ي باشا',
        'name.required' => 'هذه رسالة خطا مدلعة عالاخر للاسم فقط',
        ];
    }
}
