<?php

namespace App\Tests;

require __DIR__ . '/../vendor/autoload.php';

use App\Animal;
use App\Dog;
use PHPUnit\Framework\TestCase;

class dogTest extends TestCase
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
}
