<?php

namespace App\Products;
class FryingPan extends Product{
    public $diameter = null;

    public function __construct(string $brand, float $price, float $diameter = null){

        parent::__construct($brand, $price);

        $this->diameter = $diameter;

    }
}