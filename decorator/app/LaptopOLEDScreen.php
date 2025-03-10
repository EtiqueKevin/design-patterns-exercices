<?php

namespace App;

class LaptopOLEDScreen implements Computer {

    protected $computer;

    public function __construct(Computer $computer) 
    {
        $this->computer = $computer;
    }
    
    public function getPrice(): int 
    {
        return $this->computer->getPrice() + 100;
    }

    public function getDescription(): string 
    {
        return $this->computer->getDescription() . ", with an OLED screen";
    }
}   