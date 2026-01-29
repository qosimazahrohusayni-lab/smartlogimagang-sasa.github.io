<?php 

require_once "data/conflict.php";
require_once "data/helper.php";

use data\one\conflict as conflict1;
use data\two\conflict as conflict2;
use function helper\helpme as help;
use const helper\APPLICATION as APP;

$conflict1 = new conflict();
$conflict2 = new data\two\conflict();

helpme();

echo APPLICATION . PHP_EOL;
