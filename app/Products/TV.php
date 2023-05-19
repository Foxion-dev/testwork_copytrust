<?php

namespace App\Products;
class TV extends Product {

    public $diagonal;

    public function __construct(string $brand, float $price, float $diagonal = null){

        parent::__construct($brand, $price);

        $this->diagonal = $diagonal;

    }
}