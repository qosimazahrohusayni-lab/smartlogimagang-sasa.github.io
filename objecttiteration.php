<?php

class data implements iteratoraggregate
{
    var string $first = "first";
    public string $second = "second";
    private string $third = "third";
    protected string $forth = "forth";

 //  public function getIterator()
// {
//       $array = [
 //       "frist" => $this->frist,
//        "secound" => $this->secound,
//        "third" => $this->third,
 //       "forth" => $this->forth,
 //       ];
         
 //       return new arrayIterator($array);
 //   }
// }


    public function getIterator()
    {
        yield "frist" => $this->frist;
        yield "secound" => $this->secound;
        yield "third" => $this->third;
        yield "forth" => $this->forth;
        
         
        return new arrayIterator($array);
    }
}

$data = new data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}