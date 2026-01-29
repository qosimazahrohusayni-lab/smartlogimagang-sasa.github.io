<?php

require_once "data/animal.php";

use data\{animal, cat, dog};

$cat = new cat();
$cat->name = "luna";
$cat->run();

$dog = new dog();
$dog->neme = "doggy";
$dog->run();