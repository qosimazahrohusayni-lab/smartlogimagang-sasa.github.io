<?php 

require_once "data/food.php";
require_once "data/animal.php";
require_once "data/animalshelter.php";

$catshelter = new \data\catshelter();
$cat = $catshelter->adopt("mpus");
$cat->eat(new \data\animalfood());

$dogshelter = new \data\dogshelter();
$dog = $dogshelter->adopt("doggy");
$dog->eat(new \data\food());