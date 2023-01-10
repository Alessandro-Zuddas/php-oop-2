<?php

require_once __DIR__ . "/classes/products/Food.php";
require_once __DIR__ . "/classes/products/Kennel.php";
require_once __DIR__ . "/classes/products/Toy.php";

$category_dog = new Category("dog");
$category_cat = new Category("cat");

$prova_food_dog = new Food("Prova titolo", "Prova descrizione", 10.50, $category_dog, "Prova ingredienti", "Prova dosaggio");
$prova_food_cat = new Food("Prova titolo", "Prova descrizione", 10.50, $category_cat, "Prova ingredienti", "Prova dosaggio");

$prova_kennel_dog = new Kennel("Prova titolo", "Prova descrizione", 10.50, $category_dog, "XL", true);
$prova_kennel_cat = new Kennel("Prova titolo", "Prova descrizione", 10.50, $category_cat, "SM", false);

$prova_toy_dog = new Toy("Prova titolo", "Prova descrizione", 10.50, $category_dog, "L", "Plastic");
$prova_toy_cat = new Toy("Prova titolo", "Prova descrizione", 10.50, $category_cat, "M", "Feathers");

var_dump($prova_food_dog, $prova_food_cat, $prova_kennel_dog, $prova_kennel_cat, $prova_toy_dog, $prova_toy_cat);

?>
