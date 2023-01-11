<?php

class Category{

    public $type;

    public function __construct(string $_type)
    {
        if($_type != "dog" && $_type != "cat"){
            throw new Exception("Puoi inserire solo una stringa!");
        }else{
            $this->type = $_type;
        }
    }

}

?>