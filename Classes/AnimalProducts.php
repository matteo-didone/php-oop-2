<?php

class AnimalProducts
{
    // Declaring properties of the class
    // Using protected instead of private to allow the child classes to access them
    protected string $image;
    protected string $title;

    protected string $price;

    // Constructor method 
    public function __construct(string $image, string $title, string $price)
    {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
    }

}
?>