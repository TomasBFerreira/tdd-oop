<?php

namespace App\Tests;

use App\Animal;
use App\Dog;
use PHPUnit\Framework\TestCase;

class DogTest extends TestCase
{

    public function testClassDogExists()
    {
        $this->assertTrue(class_exists(Dog::class));
    }

    public function testDogInstanceOfAnimal()
    {
        $dog = $this->getMockBuilder(Dog::class)->disableOriginalConstructor()->getMock();
        $this->assertInstanceOf(Dog::class, $dog);
        $this->assertInstanceOf(Animal::class, $dog);
    }

    public function testBark()
    {
        $dog = new Dog('Mishu', 0);
        $this->assertEquals('WOOF!', $dog->bark());
    }
}
