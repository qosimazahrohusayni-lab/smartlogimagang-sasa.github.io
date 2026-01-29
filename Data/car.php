<?php

namespace data;

interface masbrand 
{
    function getbrand(): string;
}

interface ismaintenance
{
    function ismaintenance(): bool;
}

interface car 
{
    function drive():void;
    function gettire(): int;
}

class avanza implements car {
    public function drive(): void 
    {
    echo "drive avanza" . PHP_EOL;
    }

    public function getTire():int 
    {
        return 4;
    }

    public function getbrand(): string 
    {
        return "toyota";
    }

    public function ismaintenance():bool 
    {
        return false;
    }
}