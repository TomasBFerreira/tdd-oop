<?php

namespace App\Tests;

use App\Person;
use App\Animal;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
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

    public function testTalk()
    {
        $person = new Person('Pedro', 52);
        $this->assertEquals('Hello my name is Pedro', $person->talk());
    }
}
