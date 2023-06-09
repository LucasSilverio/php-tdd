<?php

namespace Core\Orders;

class Product
{
    public function __construct(
        protected string $name,
        protected float $price,
        protected int $total,
        protected float $tax
    ){}

    public function calc():float
    {
        $total = $this->price * $this->total;

        return ($total * $this->tax) + $total;
    }
}