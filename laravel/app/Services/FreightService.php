<?php

namespace App\Services;

use App\Domain\Freight\Interfaces\ICalculateFreight;
use App\Models\Product;

class FreightService
{
    private $product;
    private $originCEP;
    private $destinyCEP;
    private $amount;

    public function __construct(Product $product, $originCEP, $destinyCEP, $amount = 1)
    {
        $this->product = $product;
        $this->originCEP = $originCEP;
        $this->destinyCEP = $destinyCEP;
        $this->amount = $amount;
    }

    public function getTotal()
    {
        $freightService = app()->make(ICalculateFreight::class);
        return $freightService->getTotal($this->originCEP, $this->destinyCEP, $this->product, $this->amount);
    }
}