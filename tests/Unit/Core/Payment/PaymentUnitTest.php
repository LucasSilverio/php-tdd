<?php

namespace Tests\Core\Payment;

use Core\Payment\PaymentController;
use Core\Payment\PaymentInterface;
use Mockery;
use PHPUnit\Framework\TestCase;

class PaymentControllerUnitTest extends TestCase
{
    /*protected function setUp(): void
    {

    }*/

    public function testCategory()
    {
        //arrange
        $mockPayment = Mockery::mock(stdClass::class, PaymentInterface::class);
        $mockPayment
            ->shouldReceive('makePayment')
            ->times(1)//->once()
            ->andReturn(true);
        $mockPayment->shouldReceive('createPlan')->andReturn(true);

        $payment = new PaymentController($mockPayment);
        
        //action
        $response = $payment->execute();

        //assert
        $this->assertTrue($response);      
        Mockery::close();  
    }

    /*
    protected function tearDown(): void
    {
        Mockery::close();

        parent::tearDown();
    }
    */
}