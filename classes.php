<?php
class Categories
{
    public $category;

    public function __construct($category)
    {
        $this->category = $category;
    }
};




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
    public $category;
    public $name;
    public $price;
    public $img;
    public $type;

    public function __construct($category, $name, $price, $img, $type)
    {
        parent::__construct($category, $name, $price, $img);
        $this->type = $type;
    }
};





class Essentials extends Products
{
    public $category;
    public $name;
    public $price;
    public $img;
    public $type;

    public function __construct($category, $name, $price, $img, $type)
    {
        parent::__construct($category, $name, $price, $img);
        $this->type = $type;
    }
};





class Games extends Products
{
    public $category;
    public $name;
    public $price;
    public $img;
    public $type;

    public function __construct($category, $name, $price, $img, $type)
    {
        parent::__construct($category, $name, $price, $img);
        $this->type = $type;
    }
};
