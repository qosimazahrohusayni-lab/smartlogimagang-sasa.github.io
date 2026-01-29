<?php

namespace data;

require_once "animal.php";

interface animalshelter 
{
    function adopt(string $name): animal;
}

class catshelter implements animalshelter
{
    public function adopt(string $name): cat 
    {
        $cat = new cat();
        $cat->name = $name;
        return $cat;
    }
}

class dogshelter  implements animalshelter 
{
    public function adopt(string $name): dog  
    {
        $dog = new doh();
        $dog->name = $name;
        return $dog;
    }
}