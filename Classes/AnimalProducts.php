<?php

class AnimalProducts
{
    protected string $food;
    protected string $toys;

    // Kennels is "Cuccia" in Italian
    protected string $kennels;

    public function __construct(string $_food, string $_toys, string $_kennels)
    {
        $this->food = $_food;
        $this->toys = $_toys;
        $this->kennels = $_kennels;
    }
}

?>