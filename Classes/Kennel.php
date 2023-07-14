<?php

class Kennel extends AnimalProducts
{
    // Declaring properties of the subclass
    public string $article_type;
    public string $icon_category;

    // Constructor method to initialize the properties of the subclass and the parent class
    public function __construct(string $image, string $title, string $price, string $article_type, string $icon_category)
    {
        parent::__construct($image, $title, $price);
        $this->article_type = $article_type;
        $this->icon_category = $icon_category;
    }

    // Getters and Setters

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

}

?>