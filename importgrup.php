<?php

require_once "data/conflict.php";
require_once "data/helper.php";

use data\one\{conflict as conflict1, dummy, sample};
use function helper\{helpme};

$conflict = new conflict1(); 
$dummy = new dummy();
$sample = new sample();
