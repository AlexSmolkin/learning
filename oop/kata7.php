<?php

class Person
{
    const species = 'Homo Sapiens';

    public $name;
    public $age;
    public $occupation;

    public function __construct(string $name, int $age, string $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    public function introduce() : string
    {
        return 'Hello, my name is ' . $this->name;
    }

    final public function describe_job() : string
    {
        return 'I am currently working as a(n) ' . $this->occupation;
    }

    final public static function greet_extraterrestrials(string $species) : string
    {
        return 'Welcome to Planet Earth ' . $species . '!';
    }
}

class ComputerProgrammer extends Person{
    public function introduce() : string
    {
        return parent::introduce() . " and I am a " . $this->occupation;
    }
}