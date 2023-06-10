<?php

namespace Tests\Core\Orders;

use PHPUnit\Framework\TestCase;
use Core\Orders\Cart;
use Core\Orders\Product;

class CartUnitTest extends TestCase
{
    public function testCart()
    {
        $cart = new Cart();
        $cart->add(product: new Product(
            id: '1',
            name: 'teste',
            price: 12.0,
            total: 1,
            tax: 0.1
        ));       
        $cart->add(product: new Product(
            id: '2',
            name: 'teste',
            price: 20.0,
            total: 1,
            tax: 0.1
        ));

        $this->assertCount(2, $cart->getItems());
        $this->assertEquals(32, $cart->total());
    }

    public function testCartTotal()
    {
        $product1 = new Product(
            id: '1',
            name: 'teste',
            price: 12.0,
            total: 1,
            tax: 0.1
        );
        $product2 = new Product(
            id: '2',
            name: 'teste',
            price: 12.0,
            total: 1,
            tax: 0.1
        );
        $cart = new Cart();
        $cart->add(product: $product1);       
        $cart->add(product: $product1);     
        $cart->add(product: $product2);

        $this->assertCount(2, $cart->getItems());
        $this->assertEquals(36, $cart->total());
    }
}