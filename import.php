<?php 

require_once "data/conflict.php";
require_once "data/helper.php";

use data\one\conflict;
use function helper\helpme;
use const helper\APPLICATION;

$conflict1 = new conflict();
$conflict2 = new data\two\conflict();

helpme();

echo APPLICATION . PHP_EOL;
