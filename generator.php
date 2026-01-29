<?php

function getgenap(int $max): iterator 
{
    $array = [];
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }
    return new arrayiterator($array);
}

foreach (getgenap(100) as $value) {
    echo "genap : $value" . PHP_EOL;
}

function getgenjil(int $max): iterator 
{
    for($i =1; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}

foreach (getganjil(100) as $value) {
    echo "ganjil : $value" . PHP_EOL;
}
