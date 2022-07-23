<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductPost extends FormRequest
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
            'name' => 'required|max:100|min:1',
            'size' => 'required|max:2|min:1',
            'observations' => 'required|max:500',
            'stock' => 'required|numeric|min:1|max:500',
            'boarding' => 'required|before_or_equal:today',
            'brand_id' => 'required|exists:brands,id'
            //
        ];
    }
}
