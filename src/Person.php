<?php

namespace App;

class Person extends Animal implements PersonInterface
{

    public function talk(): string
    {
        return 'Hello my name is ' . $this->name;
    }
}
