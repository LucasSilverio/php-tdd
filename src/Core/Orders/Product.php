<?php

namespace Core\Orders;

class Product
{
    public function __construct(
        protected string $id,
        protected string $name,
        protected float $price,
        protected int $total,
        protected float $tax
    ){}

    public function getId():string
    {
        return $this->id;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getPrice():float
    {
        return $this->price;
    }

    public function getTotal():int
    {
        return $this->total;
    }

    public function calc():float
    {
        $total = $this->price * $this->total;

        return ($total * $this->tax) + $total;
    }
}