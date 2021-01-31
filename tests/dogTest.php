<?php

namespace App\Tests;

require __DIR__ . '/../vendor/autoload.php';

use App\Dog;
use PHPUnit\Framework\TestCase;

class dogTest extends TestCase
{

    public function testClassDogExists()
    {
        $this->assertTrue(class_exists(Dog::class));
    }

}
