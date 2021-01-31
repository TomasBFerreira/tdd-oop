<?php

namespace App\Tests;

require __DIR__ . '/../vendor/autoload.php';

use App\Person;
use App\Animal;
use PHPUnit\Framework\TestCase;

class personTest extends TestCase
{
    public function testClassPersonExists() 
    {
        $this->assertTrue(class_exists(Person::class));
    }
    
    public function testPersonInstanceOfAnimal()
    {
        $person = $this->getMockBuilder(Person::class)->disableOriginalConstructor()->getMock();
        $this->assertInstanceOf(Person::class, $person);
        $this->assertInstanceOf(Animal::class, $person);
    }
    
    public function testGetPersonNameIsString()
    {
        $person = new Person('Tomas', 23);
        $this->assertTrue(is_string($person->getName()));
    }
}
