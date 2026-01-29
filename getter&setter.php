<?php

require_once "data/category.php";

$category = new category();
$category->setname("hendphone");
$category->setexpensive(true);

$category->setname("");
echo "name : {$category->getname()}" . PHP_EOL;
echo "expensive : {$category->isexpensive()}" . PHP_EOL;
