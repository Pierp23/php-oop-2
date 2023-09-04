<?php

class Categories
{
    public $category;

    public function __construct($category)
    {
        $this->category = $category;
    }
};

$dogs = new Categories('Dogs');
$cats = new Categories('Cats');

var_dump($dogs);



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
        parent::__construct($name, $price, $img, $category);
        $this->type = $type;
    }
};


$crocchette = new Food('Dogs', 'crocchette', 13.90, 'img', 'Food');

var_dump($crocchette);


class Essentials extends Products
{
    public $category;
    public $name;
    public $price;
    public $img;
    public $type;

    public function __construct($category, $name, $price, $img, $type)
    {
        parent::__construct($name, $price, $img, $category);
        $this->type = $type;
    }
};

$cuccia = new Essentials('Dogs', 'cuccia', 33.90, 'img', 'Essentials');
var_dump($cuccia);



class Games extends Products
{
    public $category;
    public $name;
    public $price;
    public $img;
    public $type;

    public function __construct($category, $name, $price, $img, $type)
    {
        parent::__construct($name, $price, $img, $category);
        $this->type = $type;
    }
};


$palla = new Games('Dogs', 'palla pelosa', 3.90, 'img', 'Games');
var_dump($palla);
