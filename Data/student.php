<?php

 class student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setsemple(string $sample): void 
    {
        $this->sample = $sample;
    }
    public function __clone()
    {
        unset($this->sample);
    }
    public function __tostring(): string
    {
    return "student id:$this->id, name:$this->name, value:$this->value";
    }
    
    public function __invoke(...$arguments): void 
    {
        echo "invoke student with arguments $join" . PHP_EOL;
    }
    
    public function __debuqinfo()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "husayni",
            "version" => "1.0.0"
        ];
    }
}

