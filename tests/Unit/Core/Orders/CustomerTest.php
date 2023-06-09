<?php

namespace Tests\Core\Orders;

use Core\Orders\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function test_attributes()
    {
        $customer = new Customer(
            name: 'Lucas Silverio'
        );
        
        $this->assertEquals("Lucas Silverio", $customer->getName());
        
        $customer->changeName(
            name: 'Novo Nome'
        );

        $this->assertEquals("Novo Nome", $customer->getName());

        $this->assertTrue(true);
    }
}
