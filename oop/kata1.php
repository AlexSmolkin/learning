<?php

class President {
    public $name = "Barack Obama";
    public function greet(string $name) : string
    {
        return "Hello " . $name . ", my name is " . $this->name . ", nice to meet you!";
    }
}

$us_president = new President();
$president_name = $us_president->name;
$greetings_from_president = $us_president->greet('Donald');