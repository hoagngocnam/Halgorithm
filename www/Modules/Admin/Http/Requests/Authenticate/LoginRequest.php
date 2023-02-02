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
        $rules = [];
        if ($this->isMethod('post')) {
            $rules = [
                'mail_adr' => ['required', 'email:rfc,dns'],
                'password' => ['required'],
                // 'captcha' => ['required', 'captcha']
            ];
        }

        return $rules;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'mail_adr.required' => 'nhập :attribute',
            'mail_adr.email' => ':attribute không hợp lệ',
            'password.required' => 'nhập :attribute',
            'captcha.required' => 'nhập :attribute',
            'captcha.captcha' => ':attribute không chính xác'
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'mail_adr' => 'địa chỉ mail',
            'password' => 'mật khẩu',
            'captcha' => 'captcha',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
