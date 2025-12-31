<?php
class Category
{
    private $category_id;
    private $categoryName;
    private $descriptionCategory;

    public function __construct(
        $category_id = null,
        $categoryName = null,
        $descriptionCategory = null
    ) {
        $this->category_id = $category_id;
        $this->categoryName = $categoryName;
        $this->descriptionCategory = $descriptionCategory;
    }

    public function __get($categoryName)
    {
        return $this->$categoryName;
    }

    public function __set($categoryName, $value)
    {
        $this->$categoryName = $value;
    }

    public function __toString()
    {
        return "Category (category_id: {$this->category_id}, categoryName: {$this->categoryName})";
    }
}