<?php

namespace Modules\Admin\Http\Requests\Shops;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AddRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => [
                'required', 'min:10', 'max:50'
            ],
            'account_id' => [
                'required', 'integer',
                'not_exists' => Rule::exists('accounts', 'id')->where(function ($query) {
                    // return $query->where('id', 10);
                    return true;
                })
            ]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'nhập :attribute !',
            'name.min' => ':attribute không hợp lệ !',
            'name.max' => 'nhập :attribute không lớn hơn :max ký tự !',
            'account_id.required' => 'nhập :attribute !',
            'account_id.exists' => 'Chủ sỡ hữu không tồn tại !',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'cửa hàng',
            'account_id' => 'chủ sở hữu'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
