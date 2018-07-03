<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "name" => "required",
            "sku" => ["required", Rule::unique('products')->ignore($this->route()->product)],
            "weight" => ["nullable", "numeric"],
            "height" => ["nullable", "numeric"],
            "width" => ["nullable", "numeric"],
            "depth" => ["nullable", "numeric"],
            "price" => ["required", "numeric"],
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "É necessário informar o nome.",
            "sku.required" => "É necessário informar o SKU.",
            "sku.unique" => "SKU fornecido já está sendo utilizado.",
            "weight.numeric" => "Peso deve ser numérico.",
            "height.numeric" => "Altura deve ser numérico.",
            "width.numeric" => "Largura deve ser numérico.",
            "depth.numeric" => "Profundidade deve ser numérico.",
            "price.required" => "É necessário informar o preço.",
            "price.numeric" => "Preço deve ser numérico.",
        ];
    }
}
