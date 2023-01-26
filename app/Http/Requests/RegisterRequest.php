<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Вы не указали ваше Имя и Фамилию.',
            'name.max' => 'Максимальная длинна 255 символов.',

            'email.required' => 'Вы не указали вашу E-Mail потчу.',
            'email.email' => 'E-Mail почта введена не верно.',
            'email.max' => 'E-Mail почта должна содержать не более 255 символов.',
            'email.unique' => 'Данная E-Mail почта уже используется.',

            'password.required' => 'Вы не указали ваш пароль.',
            'password.confirmed' => 'Пароли не совпадают.',
        ];
    }
}
