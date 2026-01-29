<?php

require_once "Data/Civilian.php";

$civilian = new Civilian("Caretaker", "DOD.Clinic");
$civilian->name = "Caretaker";
$civilian->address = "DOD.Clinic";
$civilian->country = "DOD";

var_dump($civilian);

echo "Name : $civilian->name" . PHP_EOL;
echo "Address : $civilian->address" . PHP_EOL;
echo "Country : $civilian->country" . PHP_EOL;

$civilian2 = new Civilian("Block", null);
$civilian2->name = "Block";
$civilian2->address = "DOD.ParryTraining";
$civilian2->country = "DOD";

var_dump($civilian2);

//error
//$civilian2->name = [];