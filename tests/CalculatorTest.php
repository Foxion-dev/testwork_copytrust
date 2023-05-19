<?php


use PHPUnit\Framework\TestCase;
use App\Basket\Calculator;
use App\Products\FryingPan;
use App\Products\Phone;
use App\Products\TV;

class CalculatorTest extends TestCase
{
    public $calc;


    public function setUp(): void
    {
        parent::setUp();

        $this->calc = Calculator::getInstance();

    }

    public function test_single_product()
    {

        $tv = new TV('LG', 1000, 53);

        $this->calc->addProduct($tv, 10);
        $sum = $this->calc->getTotalPrice();

        $this->assertEquals(10000, $sum);
        $this->assertIsNumeric($sum);
    }

    public function test_array_products()
    {
        $tv = new TV('casio', 50000, 53);
        $phone = new Phone('xiaomi', 10000);
        $fryingPan = new FryingPan('xiaomi', 2000, 33);

        $testData = [
            [
                'product' => $tv,
                'count' => 10
            ],
            [
                'product' => $phone,
                'count' => 2
            ],
            [
                'product' => $fryingPan,
                'count' => 3
            ],
        ];

        $this->calc->addProducts($testData);

        $this->assertEquals(536000, $this->calc->getTotalPrice());
        $this->assertIsNumeric($this->calc->getTotalPrice());
    }
}
