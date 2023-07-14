<?php

class AnimalProducts
{
    // Declaring food, toys and kennels as instace variables
    // Using keyword "protected" so that they can only be accessed by the class itself and any subclasses
    protected string $food;
    protected string $toys;

    // Kennels is "Cuccia" in Italian
    protected string $kennels;

    // Declaring constructor method for AnimalProducts class
    public function __construct(string $_food, string $_toys, string $_kennels)
    {
        $this->food = $_food;
        $this->toys = $_toys;
        $this->kennels = $_kennels;
    }
}

?>