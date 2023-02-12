<?php

namespace Modules\Admin\Http\Requests\Categories;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
{
    public function rules(): array
    {
        return [
        ];
    }

    public function messages()
    {
        return [

        ];
    }

    public function attributes(): array
    {
        return [

        ];
    }

    public function authorize()
    {
        return true;
    }
}
