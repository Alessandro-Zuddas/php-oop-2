<?php

require_once __DIR__ . "/../Product.php";

class Food extends Product{

    private $ingredients;
    private $dosage;

    public function __construct(string $_title, string $_desc, float $_price, Category $_type, string $_ingredients, string $_dosage)
    {
        $this->title = $_title;
        $this->desc = $_desc;
        $this->price = $_price;
        $this->type = $_type;
        $this->ingredients = $_ingredients;
        $this->dosage = $_dosage;
    }

}

?>