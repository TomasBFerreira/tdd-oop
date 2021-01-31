<?php

namespace App\Tests;

require __DIR__ . '/../vendor/autoload.php';

use App\Animal;
use PHPUnit\Framework\TestCase;

class animalTest extends TestCase
{

    public function testClassAnimalExists()
    {
        $this->assertTrue(class_exists(Animal::class));
    }

    public function testGetName()
    {
        $animal = $this->getMockBuilder(Animal::class)->disableOriginalConstructor()->getMock();
        $animal->expects($this->once())->method('getName')->willReturn('Tomas');
        $this->assertEquals('Tomas', $animal->getName());
    }

    public function testGetAge()
    {
        $animal = $this->getMockBuilder(Animal::class)->disableOriginalConstructor()->getMock();
        $animal->expects($this->once())->method('getAge')->willReturn(23);
        $this->assertEquals(23, $animal->getAge());
    }
    
    public function testAnimalStub()
    {
        $animal = new AnimalStub('Animal1', 99);
        $this->assertTrue(is_string($animal->getName()));
        $this->assertEquals('Animal1', $animal->getName());
        $this->assertEquals(99, $animal->getAge());
    }

}
