<?php

namespace {

    require_once "data/conflict.php";
    require_once "data/helper.php";

    $conflict1 = new data\one\conflict();
    $conflict2 = new data\two\conflict();

    echo helper\APPLICATION .PHP_EOL;

    helper\helpme();
}