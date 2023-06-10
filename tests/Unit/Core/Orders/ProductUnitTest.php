<?php

namespace Tests\Core\Orders;

use PHPUnit\Framework\TestCase;
use Core\Orders\Product;

class ProductUnitTest extends TestCase
{
    public function test_attributes()
    {
        $product = new Product(
            id: 1,
            name: "Produto X",
            price: 10.0,
            total: 6,
            tax: 0.1
        );

        $this->assertEquals(1, $product->getId());
        $this->assertEquals("Produto X", $product->getName());
        $this->assertEquals(10, $product->getPrice());
        $this->assertEquals(6, $product->getTotal());
    }

    public function test_calc()
    {
        $product = new Product(
            id: 1,
            name: "Produto X",
            price: 10.0,
            total: 6,
            tax: 0.1
        );

        $this->assertEquals(66, $product->calc());

        $this->assertTrue(true);
    }
}