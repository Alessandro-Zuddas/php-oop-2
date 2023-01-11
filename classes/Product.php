<?php

require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/../traits/ItemPrice.php";

class Product{

    use ItemPrice;

    public $title;
    public $desc;
    public $type;

}

?>