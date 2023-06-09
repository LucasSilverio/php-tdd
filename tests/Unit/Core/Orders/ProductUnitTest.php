<?php

namespace Tests\Core\Orders;

use PHPUnit\Framework\TestCase;
use Core\Orders\Product;

class ProductUnitTest extends TestCase
{
    public function test_calc()
    {
        $product = new Product(
            name: "Produto X",
            price: 10.0,
            total: 6,
            tax: 0.1
        );

        $this->assertEquals(66, $product->calc());

        $this->assertTrue(true);
    }
}