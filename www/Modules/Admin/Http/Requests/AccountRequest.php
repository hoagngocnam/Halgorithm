<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $method = $this->getMethod();
        $rules = [];

        switch ($method) {
            case 'GET':
                $rules = [
                    'mail_adr' => ['max:50'],
                    'full_name' => ['max:100']
                ];
                break;
            case 'POST':
                $rules = [
                    'mail_adr' => ['required', 'email:rfc,dns'],
                    'first_name' => ['required', 'max:50'],
                    'last_name' => ['required', 'max:100']
                ];
                break;
            default:
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
            'mail_adr.required' => 'nhập :attribute !',
            'mail_adr.email' => ':attribute không hợp lệ !',
            'mail_adr.max' => 'nhập :attribute không lớn hơn :max ký tự !',
            'first_name.required' => 'nhập :attribute !',
            'last_name.required' => 'nhập :attribute !',
            'full_name.max' => 'nhập :attribute không lớn hơn :max ký tự !',
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
            'first_name' => 'họ',
            'last_name' => 'tên',
            'full_name' => 'họ và tên'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }
}
