<?php

namespace Test;

use PHPUnit\Framework\TestCase;

use App\Laptop;
use App\LaptopGPU;
use App\LaptopOLEDScreen;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop = new Laptop();
        $laptopGPU = new LaptopGPU($laptop);

        $this->assertSame(600, $laptopGPU->getPrice());
        $this->assertSame("A laptop computer, with a GPU", $laptopGPU->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new Laptop();
        $laptopOLEDScreen = new LaptopOLEDScreen($laptop);

        $this->assertSame(500, $laptopOLEDScreen->getPrice());
        $this->assertSame("A laptop computer, with an OLED screen", $laptopOLEDScreen->getDescription());
    }

    public function testLaptopWithGPUAndOLEDScreen()
    {
        $laptop = new Laptop();
        $laptopGPU = new LaptopGPU($laptop);
        $laptopGPUAndOLEDScreen = new LaptopOLEDScreen($laptopGPU);

        $this->assertSame(700, $laptopGPUAndOLEDScreen->getPrice());
        $this->assertSame("A laptop computer, with a GPU, with an OLED screen", $laptopGPUAndOLEDScreen->getDescription());
    }
}