<?php

interface helloworld 
{
    function seyhello(): void;
}

$helloworld = new class implements helloworld {

    public string $name;

    public function __construct(string $name){
        $this->name = $name;
    }
    
    public function seyhello(): void 
    {
        echo "hello world" . PHP_EOL;
    }
};
$seyhelloworld->seyhello();
