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
}
