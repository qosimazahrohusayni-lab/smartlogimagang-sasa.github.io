<?php

require_once "data/student.php";

$student1 = new student();
$student1->id ="1";
$student1->nama = "husayni";
$student1->value = 100;

$student2 = new student();
$student2->id ="1";
$student2->nama = "husayni";
$student2->value = 100;

var_dump($student1 == $student2);
var_dump($student1 === $student2);
var_dump($student1 === $student2);
