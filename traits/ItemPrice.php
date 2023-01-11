<?php

trait ItemPrice{

    public $price;

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($_price){
        $this->price = $_price;
    }
}

?>