<?php

require_once "data/student.php";

$student1 = new student();
$student1->id ="1";
$student1->nama = "husayni";
$student1->value = 100;
$student1->setsample("xxx");

var_dump($student1);

$student2 = clone $student1;
var_dump($student1);

// cara manual clone
//$student2 = new student();
//$student2->id = $student1->id;
//$student2->nama = $student1->nama;
//$student2->value = $student1->value;
