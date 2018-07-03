<?php

namespace App\Domain\Freight\Interfaces;

use App\Models\Product;

interface ICalculateFreight
{
    public function getTotal($originCEP, $destinyCEP, Product $product, $amount);
}