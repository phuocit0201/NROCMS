<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'password' => 'required|string|max:100',
            'username' => 'required|string|max:100',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'password.required' => 'Mật khẩu không được bỏ trống',
            'password.max' => 'Mật khẩu không vượt quá 100 kí tự',
            'username.required' => 'Tài khoản không được bỏ trống',
            'username.max' => 'Tài khoản không vượt quá 100 kí tự',
        ];
    }
}
