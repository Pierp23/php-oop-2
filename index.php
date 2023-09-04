<?php

class Categories
{
    public $category;

    public function __construct($category)
    {
        $this->category = $category;
    }
}

class Products extends Categories
{
    public $category;
    public $name;
    public $price;
    public $img;


    public function __construct($category, $name, $price, $img)
    {
        parent::__construct($category);
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
    }
};



class Food extends Products
{
    public $name;
    public $price;
    public $img;
    public $category;
    public $type;

    public function __construct($category, $name, $price, $img, $type)
    {
        parent::__construct($name, $price, $img, $category);
        $this->type = $type;
    }
};



class Essentials extends Products
{
    public $name;
    public $price;
    public $img;
    public $category;
    public $type;

    public function __construct($category, $name, $price, $img, $type)
    {
        parent::__construct($name, $price, $img, $category);
        $this->type = $type;
    }
};

class Games extends Products
{
    public $name;
    public $price;
    public $img;
    public $category;
    public $type;

    public function __construct($category, $name, $price, $img, $type)
    {
        parent::__construct($name, $price, $img, $category);
        $this->type = $type;
    }
};
