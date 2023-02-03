<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
                    'name' => ['max:200']
                ];
                break;
            case 'POST':
                $rules = [
                    'name' => ['required'],
                    'category_id' => ['required'],
                    'original_price' => ['required'],
                    'promotional_price' => ['required'],
                    'picture' => ['required', 'mimes:jpg,jpeg,png', 'file', 'max:2048']
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
            'name.required' => 'nhập :attribute',
            'category_id.required' => 'nhập :attribute',
            'original_price.required' => 'nhập :attribute',
            'promotional_price.required' => 'nhập :attribute',
            'picture.required' => 'chọn :attribute'
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
            'name' => 'tên sản phẩm',
            'category_id' => 'danh mục',
            'original_price' => 'giá gốc',
            'promotional_price' => 'giá khuyến mãi',
            'picture' => 'hình ảnh',
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
