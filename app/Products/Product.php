<?php

namespace App\Products;
abstract class Product {
    public $brand;
    public $price;

    public function __construct(string $brand, float $price){
        $this->brand = $brand;
        $this->price = $price;
    }
}
