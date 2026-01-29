<?php

class zero 
{
    private array $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }
    
    public function __isset($name): bool 
    {
        return lsset($this->properties[$name]);
    }
    
    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callstatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "call static function $name with arguments $join" . PHP_EOL;
    }
}

$zero = new zero();
$zero->fristname = "husayni";
$zero->middlename = "qosima";
$zero->lastname = "zahro";

echo "fisrt name : $zero->fristname ". PHP_EOL;
echo "middle name : $zero->middlename ". PHP_EOL;
echo "last name :$zero->lastname ". PHP_EOL;

$zero->seyhello("husayni", "zahro");
$zero::seyhello("husayni", "zahro");
