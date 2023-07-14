<?php

class AnimalProducts
{
    // Declaring properties of the class
    // Using protected instead of private to allow the child classes to access them
    protected string $image;
    protected string $title;

    protected string $price;

    protected string $icon_category;

    protected string $article_type;

    // Constructor method 
    public function __construct(string $image, string $title, string $price, string $icon_category, string $article_type)
    {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->icon_category = $icon_category;
        $this->article_type = $article_type;
    }

}
?>