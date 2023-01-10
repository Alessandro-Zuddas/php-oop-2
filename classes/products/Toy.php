<?php

require_once __DIR__ . "/../Product.php";

class Toy extends Product{

    public $dimension;
    public $material;

    public function __construct(string $_title, string $_desc, float $_price, Category $_type, string $_dimension, string $_material)
    {
        $this->title = $_title;
        $this->desc = $_desc;
        $this->price = $_price;
        $this->type = $_type;
        $this->dimension = $_dimension;
        $this->material = $_material;
    }

}

?>