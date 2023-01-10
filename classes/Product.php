<?php

require_once __DIR__ . "/Category.php";

class Product{

    protected $title;
    protected $desc;
    protected $price;
    protected $type;

    public function __construct(string $_title, string $_desc, float $_price, Category $_type)
    {
        $this->title = $_title;
        $this->desc = $_desc;
        $this->price = $_price;
        $this->type = $_type;
    }

}

?>