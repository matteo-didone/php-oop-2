<?php

class Product
{
    // Declaring properties of the class
    // Using protected instead of private to allow the child classes to access them
    protected string $title;
    protected string $price;
    protected string $description;
    protected string $image;
    protected Category $category;
    protected int $quantity;
    protected bool $available;
    protected string $article_type;
    protected string $icon_category;

    // Constructor method 
    public function __construct(string $title, string $price, string $description, string $image, Category $category, int $quantity, bool $available, string $article_type, string $icon_category) {
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
        $this->category = $category;
        $this->quantity = $quantity;
        $this->available = $available;
        $this->article_type = $article_type;
        $this->icon_category = $icon_category;
    }

    // Getters and Setters

    public function getBasicInfo()
    {
        return "Product $this->title, with price: $this->price, available: $this->available";
    }

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

    public function getArticleType()
    {
        return $this->article_type;
    }

    public function setArticleType(string $article_type)
    {
        $this->article_type = $article_type;
    }

    public function getIconCategory()
    {
        return $this->icon_category;
    }

    public function setIconCategory(string $icon_category)
    {
        $this->icon_category = $icon_category;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->$description = $description;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory(string $category)
    {
        $this->$category = $category;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity)
    {
        $this->$quantity = $quantity;
    }

    public function getAvailable()
    {
        return $this->available;
    }

    public function setAvailable(bool $available)
    {
        $this->$available = $available;
    }

}
?>