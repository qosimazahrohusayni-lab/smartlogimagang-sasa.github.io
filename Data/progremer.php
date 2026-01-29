<?php

class progremer
{
    public string $name;
    public function __construct(dtring $name)
    {
        $this->name = $name;
    }
}

class beckendprogramer extends progremmer
{

}

class frontendprogramer extends programmer
{

}

class company {
    public programmer $progremmer;
}

function seyhelloprogremmer(progremmer $progremmer)
{
    if ($progremmer instanceof beckendprogremmer) {
    echo "hello progremmer $progremmer->name".PHP_EOL;
    } else if ($progremmer instanceof frontendprogremmer) {
        echo "hello progremmer $progremmer->name".PHP_EOL;
   } else if ($progremmer instanceof frontendprogremmer) {
    echo "hello progremmer $progremmer->name".PHP_EOL;
   }

}