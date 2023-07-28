<?php

namespace LibazTech\Belajar;

class Customer {
    public function __construct(private string $name)
    {
    }

    public function SayHello(string $name = "Guest"): string
    {
        return "Hello $name, My name is $this->name";
    }
}