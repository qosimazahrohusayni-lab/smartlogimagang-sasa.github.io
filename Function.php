<?php
require_once "Data/Civilian.php";

$caretaker = new Civilian("Caretaker", "DOD.Clinic");
$caretaker->name = "Block";
$caretaker->sayHello("Caretaker");

$block = new Civilian("Block", null);
$block->name = "Block";
$block->sayHello(null);

$caretaker->info();
$block->info();