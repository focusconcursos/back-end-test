<?php

namespace App\Transformer;

class ProductTransformer extends TransformerAbstract
{
    public function getAttributes($model)
    {
        return [
            "id" => $model->id,
            "nome" => $model->name,
            "sku" => $model->sku,
            "preco" => $model->price,
        ];
    }
}