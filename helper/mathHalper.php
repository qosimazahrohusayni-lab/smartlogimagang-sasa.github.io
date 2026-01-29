<?php

namespace helper;

class mathHelper
{
    static public string $name = "mathHelper";

    static public function sum(int...$numbers):int 
    {
    $total =0;
    foreach ($numbers as $numbers) {
        $total += $number;
    }
    return $total;
    }
}