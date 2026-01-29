<?php 

$array = [
    "fristname" => "husayni",
    "middlename" => "qosima",
    "lastname" => "zahro"
];

$object = (object)$array;

var_dump($object);

echo "first name $object->fristname" . PHP_EOL;
echo "middle name $object->middlename" . PHP_EOL;
echo "last name $object->lastname" . PHP_EOL;

$arraylagi =(array) $object;
var_dump($arraylagi);

require_once "data/civilian.php";

$person = new person("husayni", "jember");
var_dump($arrayperson);

$arrayperson = (array) $person;
var_dump($arrayperson);