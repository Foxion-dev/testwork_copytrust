<?php

use App\Basket\Calculator;
use App\Products\FryingPan;
use App\Products\Phone;
use App\Products\TV;

$tv = new TV('casio', 10, 53);
$phone = new Phone('xiaomi', 1200.4);
$fryingPan = new FryingPan('xiaomi', 1200.4, 33);

$testData = [
    [
        'product' => $tv,
        'count' => 22
    ],
    [
        'product' => $phone,
        'count' => 2
    ],
    [
        'product' => $fryingPan,
        'count' => 1
    ],
    [
        'product' => $tv,
        'count' => 22
    ],
];

$calc = Calculator::getInstance();


$calc->addProducts($testData);

//$calc->addProduct($phone, 15);
//$calc->addProduct($fryingPan, 121);

echo '<pre>', print_r($calc), '</pre>';
echo '<pre>', print_r($calc->getTotalPrice()), '</pre>';
?>