<?php 

namespace data;

require_once "food.php";

abstract class animal
{
    public string $name ;
    abstract public function run():void;
    abstract public function eat(animalfood $animalfood): void;
}

class cat extends animal
{
    public function run():void
    {
    echo "cat $this->nama is running" . PHP_EOL;
    }

    public function eat(animalfood $animalfood): void 
    {
        echo "cat is eating". PHP_EOL;
    }
}

class dog extends animal
{
    public function run():void
    {
    echo "dog $this->nama is running" . PHP_EOL;
    }

    public function eat(food $animalfood): void 
    {
        echo "dog is eating". PHP_EOL;
    }
}