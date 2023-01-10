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

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>PHP-OOP-2</title>
    </head>
    <body>
        
        <div class="container">

            <!-- Food -->
            <ul class="product-card">
                <li> <?php echo $prova_food_dog->title ?> </li>
                <li> <?php echo $prova_food_dog->desc ?> </li>
                <li> <?php echo $prova_food_dog->price ?> </li>
                <li> <?php echo $prova_food_dog->ingredients ?> </li>
                <li> <?php echo $prova_food_dog->dosage ?> </li>
            </ul>

            <ul class="product-card">
                <li> <?php echo $prova_food_cat->title ?> </li>
                <li> <?php echo $prova_food_cat->desc ?> </li>
                <li> <?php echo $prova_food_cat->price ?> </li>
                <li> <?php echo $prova_food_cat->ingredients ?> </li>
                <li> <?php echo $prova_food_cat->dosage ?> </li>
            </ul>
            <!-- /Food -->
            
            <!-- Kennel -->
            <ul class="product-card">
                <li> <?php echo $prova_kennel_dog->title ?> </li>
                <li> <?php echo $prova_kennel_dog->desc ?> </li>
                <li> <?php echo $prova_kennel_dog->price ?> </li>
                <li> <?php echo $prova_kennel_dog->dimension ?> </li>
                <li> <?php echo $prova_kennel_dog->washable ?> </li>
            </ul>

            <ul class="product-card">
                <li> <?php echo $prova_kennel_cat->title ?> </li>
                <li> <?php echo $prova_kennel_cat->desc ?> </li>
                <li> <?php echo $prova_kennel_cat->price ?> </li>
                <li> <?php echo $prova_kennel_cat->dimension ?> </li>
                <li> <?php echo $prova_kennel_cat->washable ?> </li>
            </ul>
            <!-- /Kennel -->

            <!-- Ingredients -->
            <ul class="product-card">
                <li> <?php echo $prova_toy_dog->title ?> </li>
                <li> <?php echo $prova_toy_dog->desc ?> </li>
                <li> <?php echo $prova_toy_dog->price ?> </li>
                <li> <?php echo $prova_toy_dog->dimension ?> </li>
                <li> <?php echo $prova_toy_dog->material ?> </li>
            </ul>

            <ul class="product-card">
                <li> <?php echo $prova_toy_cat->title ?> </li>
                <li> <?php echo $prova_toy_cat->desc ?> </li>
                <li> <?php echo $prova_toy_cat->price ?> </li>
                <li> <?php echo $prova_toy_cat->dimension ?> </li>
                <li> <?php echo $prova_toy_cat->material ?> </li>
            </ul>
            <!-- /Ingredients -->

        </div>        

    </body>
</html>
