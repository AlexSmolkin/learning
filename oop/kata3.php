<?php

class CurrentUSPresident {
    const name = "Barack Obama";

    public static function greet(string $name) : string
    {
        return "Hello " . $name . ", my name is Barack Obama, nice to meet you!";
    }
}