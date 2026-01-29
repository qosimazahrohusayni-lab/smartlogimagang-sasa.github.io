<?php

require_once "data/shepe.php";

use data\{shepe, rectangle};

$shepe = new shepe();
echo $shepe->getcorner() . PHP_EOL;

$rectangle = new shepe();
echo $rectangle -> getcorner() . PHP_EOL;
echo $rectangle -> getperencorner().PHP_EOL;
