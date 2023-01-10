<?php

require_once __DIR__ . "/../Product.php";

class Kennel extends Product{

    public $dimension;
    public $washable;

    public function __construct(string $_title, string $_desc, float $_price, Category $_type, string $_dimension, bool $_washable)
    {
        $this->title = $_title;
        $this->desc = $_desc;
        $this->price = $_price;
        $this->type = $_type;
        $this->dimension = $_dimension;
        $this->washable = $_washable;
    }

}

?>