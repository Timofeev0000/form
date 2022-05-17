<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:5|max:500'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Поле имя является обязательным!',
            'email.required' => 'Поле почты является обязательным!',
            'email.email' => 'Проверьте правильность введения данных почти!',
            'subject.required' => 'Поле темы сообщения является обязательным!',
            'subject.min' => 'Длина темы сообщения не должна быть меньше 5 символов!',
            'subject.max' => 'Длина темы сообщения не должна быть больше 50 символов!',
            'message.required' => 'Поле сообщения является обязательным!',
            'message.min' => 'Поле сообщения не должна быть меньше 5 символов!',
            'message.max' => 'Поле сообщения не должна быть больше 50 символов!'
        ];
    }
}
