<?php

include __DIR__.'/category.php';
class Product{
    public $name, $price, $image, $brand, $category;

    public function __construct(string $name, float $price, string $image, string $brand, Category $category){
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->brand = $brand;
        $this->category = $category;
    }

    public function printIcon(){
        $icon = $this->category->icon;
        return "<i class='$icon'></i>";
    }
}

