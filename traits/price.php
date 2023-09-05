<?php

trait Price
{
    protected $price;

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        return $this->price = $price;
    }
};
