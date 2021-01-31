<?php

namespace App;

class Dog extends Animal
{

    public function bark(): string
    {
        return 'WOOF!';
    }

}
