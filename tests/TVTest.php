<?php


use PHPUnit\Framework\TestCase;
use App\Products\TV;

class TVTest extends TestCase
{

    public function test_add_tv()
    {

        $tv = new TV('LG', 1000.45, 53);

        $this->assertNotEmpty($tv->brand);
        $this->assertIsNumeric($tv->price);
    }

}
