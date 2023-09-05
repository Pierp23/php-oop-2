<?php

require_once __DIR__ . '/traits/price.php';
require_once __DIR__ . '/traits/name.php';

class Categories
{
    public $category;

    public function __construct($category)
    {
        $this->category = $category;
    }
};


class Products
{
    use Name;
    use Price;

    public $category;
    public $img;

    public function __construct($category, $name, $price, $img)
    {
        $this->category = $category;
        $this->name = $name;

        $this->img = $img;
        if (is_numeric($price)) {
            return $this->price = $price;
        } else {
            throw new Exception('Attento! Il dato inserito è sbagliato!');
        };
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
