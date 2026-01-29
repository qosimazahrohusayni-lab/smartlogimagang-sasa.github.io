<?php 

require_once "helper/mathHalper.php";

use helper\mathHelper;

echo methHelper::$name , PHP_EOL;

methHelper::$name = "husayni qosima";
echo methHelper::$name . PHP_EOL;

$result = methHelper::sum(10, 10, 10, 10, 10,);
echo "result:$result".PHP_EOL;