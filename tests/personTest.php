<?php

namespace App\Tests;

require __DIR__ . '/../vendor/autoload.php';

use App\Person;
use PHPUnit\Framework\TestCase;

class personTest extends TestCase
{
    public function testClassPersonExists() 
    {
        $this->assertTrue(class_exists(Person::class));
    }
}
