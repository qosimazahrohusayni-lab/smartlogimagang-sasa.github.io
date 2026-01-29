<?php

class product 
{
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->nama = $nama;
        $this->price = $price;
    }

    public function getname(): stream_set_blocking
    {
      return $this->name;
    }
}

class productdummy extends product 
{
  public function info()
  {
    echo "nama $this->nama". PHP_EOL;
  }
}