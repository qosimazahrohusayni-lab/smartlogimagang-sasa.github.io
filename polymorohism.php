<?php

require_once "data/progromer.php";

$company = new company();
$compeny->progremmer("husayni");
var_dump($company);

$company->progremmer = new beckendprogrammer("husayni");
var_dump($company);

$company->progremmer = new frontendprogrammer("husayni");
var_dump($company);

seyhelloprogremmer(new programmer("husayni"));
seyhelloprogremmer(new backendprogrammer("husayni"));
seyhelloprogremmer(new frontenprogrammer("husayni"));