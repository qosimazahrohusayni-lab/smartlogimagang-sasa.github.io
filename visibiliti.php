<?php

require_once "data/product.php";

$product = new producT("apple", 20000);

echo $product->getname() . PHP_EOL;
echo $product->getprice() . PHP_EOL;

$dummy = new productsummy("dummy", 1000);
dummy->info();
