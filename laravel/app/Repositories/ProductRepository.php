<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends RepositoryAbstract
{
    public function __construct()
    {
    }

    public function findByIdOrName($query)
    {
        return Product::where("name", $query)->orWhere("id", $query)->firstOrFail();
    }

    public function create($data)
    {
        return Product::create($data);
    }

    public function update($id, $data)
    {
        $product = Product::find($id);
        $product->update($data);

        return $product;
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
    }
}