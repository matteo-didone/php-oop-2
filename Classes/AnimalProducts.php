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

    // Getters and Setters
    public function getImage()
    {
        return $this->image;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(string $price)
    {
        $this->price = $price;
    }

}
?>