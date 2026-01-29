<?php

trait seygoodbay
{
  public function goodbay(?string $nama): void 
  {
      if(is_null($name)) {
          echo "good bay" . PHP_EOL;
      } else {
              echo "good bay $nama" . PHP_EOL;
      }
  }
}

trait seyhello
{
    public function hello(?string $name): void 
    {
        if (is_null($name)) { 
            echo "hello" . PHP_EOL;
        } else {
            echo "hello $name" . PHP_EOL;
        }
    }
}

class perentperson {
    public function goodbay(?string $name): void 
    {
        echo "good bay in person" . PHP_EOL;
    }

    public function hello(?string $name): void 
    {
        echo "hello in person" . PHP_EOL;
    }
}

trait all {
    use seygoodbay, seyhello, hasname, canrun{
        // bisa di overside
        // hello as private;
       // goodbye as privete;
    }
}
class person extends perentperson
{
    use ALL;
    public function run(): void 
    {
        echo "person $this->name is ruuning" . PHP_EOL;
    }
}
