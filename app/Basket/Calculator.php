<?php

namespace App\Basket;

use App\Products\Product;
use App\Utils\Singleton;
class Calculator extends Singleton
{
    public $products = [];

    public function addProduct(Product $product, int $count)
    {
        $this->products[] = [
            'product' => $product,
            'count' => $count,
            'price' => $product->price,
            'total_price' => $product->price * $count,
        ];
    }

    public function addProducts(array $data)
    {
        foreach ($data as $item) {
            $this->addProduct($item['product'], $item['count']);
        }
    }
    public function getTotalPrice() :int | float
    {
        $result = 0;

        foreach ($this->products as $product){
            $result += $product['total_price'];
        }

        return $result;
    }
}
