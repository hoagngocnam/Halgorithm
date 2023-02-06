<?php

namespace Modules\Admin\Http\Requests\Accounts;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
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
    public function authorize()
    {
        return true;
    }
}
