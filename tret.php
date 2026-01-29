<?php

require_once "data/seygoodbay.php";

use data\traits\{person, seyhello, seygoodbay};

$person = new person();
$person->goodbay("husayni");
$person->hello("zahro");

$person->name = "husayni";
var_dump($person);