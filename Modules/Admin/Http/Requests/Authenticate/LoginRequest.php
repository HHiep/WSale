<?php

namespace Modules\Admin\Http\Requests\Authenticate;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['required', 'max:255', 'email:rfc,dns'],
            'password' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => "chưa có email",
            'password.required' => "chưa có password",
        ];
    }

   
    public function authorize()
    {
        return true;
    }
}
